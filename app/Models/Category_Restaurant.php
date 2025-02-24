<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'category_id'
    ];
}
