<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $restaurant = $user->restaurant;

        $products = Product::where('restaurant_id', $restaurant->id)->get();

        return  view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $restaurant = $user->restaurant;
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|gt:0|lt:10000|decimal:2',
            'visible' => 'boolean',
            'type' => 'string|required|in:Food,Soft Drinks,Drinks,Dessert',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $data['restaurant_id'] = $restaurant->id;
        $data['image'] = Storage::put('uploads', $data['image']);

        $newProduct = new Product();
        $newProduct->fill($data);
        $newProduct->save();
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return redirect()->route('admin.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $user = Auth::user();
        $restaurant = $user->restaurant;
        $data = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|gt:0|lt:10000|decimal:2',
            'visible' => 'boolean',
            'type' => 'string|required|in:Food,Soft Drinks,Drinks,Dessert',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $data['restaurant_id'] = $restaurant->id;
        $data['image'] = Storage::put('uploads', $data['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $image = Storage::put('uploads', $data['image']);
            $data['image'] = $image;
        }

        $product->update($data);
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
