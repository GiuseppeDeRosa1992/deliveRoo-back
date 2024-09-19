<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name',
        'description',
        'image',
        'type',
        'price',
        'visible'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity', 'name_product', 'price_product');
    }
}
