<?php

namespace App\Models;

use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model 
{
    use HasFactory;

    const PAYMENT_STATUS_STARTED = 'started'; // Payment started but not yet choosen payment method
    const PAYMENT_STATUS_PENDING = 'pending';
    const PAYMENT_STATUS_SUCCESS = 'success';
    const PAYMENT_STATUS_FAILED = 'failed';

    const MIDTRANS_STATUS_PENDING = 'pending';
    const MIDTRANS_STATUS_SETTLEMENT = 'settlement';
    const MIDTRANS_STATUS_CAPTURE = 'capture';
    const MIDTRANS_STATUS_DENY = 'deny';
    const MIDTRANS_STATUS_CANCEL = 'cancel';
    const MIDTRANS_STATUS_EXPIRE = 'expire';

    const PAYMENT_TYPE_CREDIT_CARD = 'credit_card';
    const PAYMENT_TYPE_BANK_TRANSFER = 'bank_transfer';
    const PAYMENT_TYPE_QRIS = 'qris';


    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable = [
            'user_id',
            'product_id',
            'transaction_id',
            'status',
            'token',
            'payment_type',
            'payment_channel',
            'total_amount',
            'transaction_status',
            'transaction_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public static function getPaymentStatus(string $transactionStatus): string
    {
        return match ($transactionStatus) {
            self::MIDTRANS_STATUS_SETTLEMENT, self::MIDTRANS_STATUS_CAPTURE => self::PAYMENT_STATUS_SUCCESS,
            self::MIDTRANS_STATUS_DENY, self::MIDTRANS_STATUS_CANCEL, self::MIDTRANS_STATUS_EXPIRE => self::PAYMENT_STATUS_FAILED,
            default => self::PAYMENT_STATUS_PENDING,
        };
    }
}