<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function getCategoryAll()
    {
        $categories = Category::all();
        return response()->json([
            'categories' => $categories
        ]);
    }
}
