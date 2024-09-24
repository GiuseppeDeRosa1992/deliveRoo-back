<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurant = $user->restaurant;
        $orders = Order::where('restaurant_id', $restaurant->id)->orderByDesc('created_at')->get();
        $products = Product::where('restaurant_id', $restaurant->id)->orderBy('name')->get();
        $categories = $restaurant->categories();





        return view('admin.dashboard', compact('user', 'restaurant', 'orders', 'products', 'categories'));
    }
}
