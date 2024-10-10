<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContactRestaurant;
use App\Mail\NewContactUser;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderApiController extends Controller
{
    public function store(Request $request)
    {


        $data = $request->validate([
            'restaurant_id' => 'required|integer',
            'name_client' => 'required|string',
            'email_client' => 'required|email',
            'number_phone' => 'required|string',
            'address_client' => 'required|string',
            'total' => 'required|numeric|decimal:2',
            'products' => 'required|array',
            'products.*.product_id' => 'required|integer|exists:products,id',
            'products.*.name_product' => 'required|string',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.price_product' => 'required|string',
        ]);

        DB::transaction(function () use ($data) {
            // Crea l'ordine
            $order = Order::create([
                'restaurant_id' => $data['restaurant_id'],
                'name_client' => $data['name_client'],
                'email_client' => $data['email_client'],
                'number_phone' => $data['number_phone'],
                'address_client' => $data['address_client'],
                'total' => $data['total'],
            ]);

            // Crea le voci della tabella pivot
            foreach ($data['products'] as $product) {
                Order_Product::create([
                    'order_id' => $order->id,
                    'product_id' => $product['product_id'],
                    'name_product' => $product['name_product'],
                    'quantity' => $product['quantity'],
                    'price_product' => $product['price_product'],
                ]);
            }
        });
        $restaurant = Restaurant::find($data['restaurant_id']);

        $email_client = $data['email_client'];
        Mail::to('info@info.com')->send(new NewContactUser($data, $restaurant));
        Mail::to('info@info.com')->send(new NewContactRestaurant($data, $restaurant));



        return response()->json(['message' => 'Ordine inviato con successo!']);
    }
}
