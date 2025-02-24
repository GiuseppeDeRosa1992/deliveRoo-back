<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    use HasFactory;

    protected $table = 'order_product';

    protected $fillable = [
        'order_id',
        'product_id',
        'name_product',
        'price_product',
        'quantity'
    ];
}
