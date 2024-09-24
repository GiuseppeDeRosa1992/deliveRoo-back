<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' =>  'required|string|min:3|max:255',
            'image' =>  'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            'p_iva' => 'required|string|size:11|regex:/^\d+$/',
            'address' => 'required|string|min:3|max:255',
            'phone_number' => 'required|size:10|regex:/^\d+$/',
            'categories' => 'array',
            'categories.*' => 'integer',

        ]);
        $data['user_id'] = $user->id;
        $data['slug'] = Str::slug($request->name, '-');
        if ($request->has('image')) {
            Storage::delete($restaurant->image);
            $image = Storage::put('uploads', $data['image']);
            $data['image'] = $image;
        }

        $restaurant->update($data);
        if (isset($data['categories'])) {
            $restaurant->categories()->sync($data['categories']);
        }
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        return redirect()->route('admin.dashboard');
    }
}
