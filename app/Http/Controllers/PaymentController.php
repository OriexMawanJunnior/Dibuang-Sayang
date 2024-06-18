<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($id){
        $product = Product::findOrFail($id);
        return view('buyer.payment', compact('product'));
    }
    
    public function pay(Request $request)
    {
        // Set Midtrans configuration
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false; // Set to true for production
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $transaction = new Payment();
        $transaction->user_id = $request->user()->id;
        $transaction->product_id = $request->product_id;
        $transaction->status = 'pending';
        $transaction->payment_type = $request->payment_type;
        $transaction->payment_channel = $request->payment_channel;
        $transaction->total_amount = $request->total_amount;
        $transaction->transaction_status = 'pending';
        $transaction->transaction_time = now();
        $transaction->save();

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->id,
                'gross_amount' => $transaction->total_amount,
            ],
            'customer_details' => [
                'first_name' => $request->user()->name,
                'email' => $request->user()->email,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        $transaction->transaction_id = $params['transaction_details']['order_id'];
        $transaction->token = $snapToken;
        $transaction->save();

        return view('buyer.payment', compact('snapToken'));
    }
}
