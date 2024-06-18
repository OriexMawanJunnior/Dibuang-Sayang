<?php

namespace App\Models;

use App\Models\Store;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model implements hasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'store_id', 
        'name', 
        'category',
        'detail_product',
        'stock',
        'price',
        'date_sell_until',
        'expired_date',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
