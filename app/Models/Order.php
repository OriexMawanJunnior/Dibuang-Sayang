<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name', 'product_name', 'quantity', 'total_price', 'pickup_status', 'payment_status'
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}
