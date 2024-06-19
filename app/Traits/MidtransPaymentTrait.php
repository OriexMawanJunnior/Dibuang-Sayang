<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\UserProfile;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\WorkspaceRoom;

trait MidtransPaymentTrait
{
    public function generateOrderId(): string
    {
        return  rand(1000, 9999);
    }


    public function generateSnapTransactionPayloads(User $user, Product $product, Request $request): array
    {
        $sum = $request->stock;
        $totalPrice = $sum * $product->price;
        return [
            'transaction_details' => [
                'order_id' => $this->generateOrderId(),
                'gross_amount' => $totalPrice,
            ],
            'item_details' => [
                [
                    'id' => $product->id,
                    'price' => $product->price,
                    'quantity' => $request->stock,
                    'name' => $product->name,
                ]
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];
    }
}