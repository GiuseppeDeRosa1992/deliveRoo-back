<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name_client',
        'email_client',
        'number_phone',
        'address_client',
        'total'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity', 'name_product', 'price_product');
    }

    public function calculateTotal()
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->price_product * $product->pivot->quantity;
        });
    }
}
