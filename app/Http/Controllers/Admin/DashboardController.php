<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurant = $user->Restaurant;
        $orders = Order::where('restaurant_id', $restaurant->id)->orderByDesc('created_at')->get();
        $products = Product::where('restaurant_id', $restaurant->id)->orderBy('name')->get();





        return view('admin.dashboard', compact('user', 'restaurant', 'orders', 'products'));
    }
}
