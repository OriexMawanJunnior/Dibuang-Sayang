<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\User;
use Midtrans\Config;
use App\Models\Payment;
use App\Models\Product;
use App\Services\Midtrans;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Traits\MidtransPaymentTrait;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function payment($id){
        $product = Product::with('store')->findOrFail($id);
        $user = Auth::user();
        $store = $product->store;

        // Compact product, user, dan store ke dalam view
        return view('buyer.payment', compact('product', 'user', 'store'));
    }
    
    use MidtransPaymentTrait;

    public function pay(Request $request)
    {
        $user = User::find($request->user_id);

        /** @var Product $product */
        $product = Product::find($request->product_id);
        
        $request->validate([
            'stock' => 'required|numeric|min:1',
        ]);

        $payloads = $this->generateSnapTransactionPayloads($user, $product, $request);

        // Set blanket expiry (both page and payment expiry) on sandbox mode for testing
        if (!config('midtrans.is_production')) {
            $payloads['expiry'] = [
                'start_time' => now()->format('Y-m-d H:i:s O'),
                'duration' => config('midtrans.snap_expiration_duration'),
                'unit' => 'minute'
            ];
        }

        $snapUrl = config('midtrans.is_production') ? config('midtrans.snap_production_base_url') : config('midtrans.snap_sandbox_base_url');

        try {
            $response = Midtrans::post(
                $snapUrl . '/transactions',
                config('midtrans.server_key'),
                $payloads
            );
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage(),
                'payloads' => $payloads
            ], 500);
        }

        $responseCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody()->getContents());
        $responseBody->order_id = $payloads['transaction_details']['order_id'];

        $sum = $request->stock;
        $totalPrice = $sum * $product->price;

        try {
            Payment::create([
                'id' => $payloads['transaction_details']['order_id'],
                'user_id' => $user->id,
                'product_id' => $product->id,
                'token' => $responseBody->token,
                'total_amount' => $totalPrice,
                'status' => Payment::PAYMENT_STATUS_STARTED,
            ]);

            return new JsonResponse([
                'code' => $responseCode,
                'status' => 'success',
                'message' => 'Transaction is created successfully',
                'data' => $responseBody
            ], $responseCode);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
