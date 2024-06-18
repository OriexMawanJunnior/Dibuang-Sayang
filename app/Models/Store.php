<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model implements hasMedia
{
    use HasFactory, InteractsWithMedia;
    
    protected $fillable = [
        'user_id', 
        'name', 
        'category',
        'email',
        'phone_number',
        'address',
        'detail_address',
        'province',
        'city',
        'district',
        'postal_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
