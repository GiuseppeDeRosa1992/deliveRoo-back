<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantApiController extends Controller
{
    public function getRestaurantsAll()
    {
        $restaurants = Restaurant::with('categories')->get();
        return response()->json([
            'restaurants' => $restaurants
        ]);
    }

    public function getRestaurantsByCategory(Request $request)
    {
        // Valida le categorie
        if ($request->categories) {
            $request->validate([
                'categories.*' => 'integer|exists:categories,id'
            ]);

            // Assicurati che $categories sia un array
            $categories = is_array($request->categories) ? $request->categories : [$request->categories];
            $categoryCount = count($categories);

            // Trova ristoranti che hanno tutte le categorie selezionate
            $restaurants = Restaurant::whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('categories.id', $categories);
            }, '=', $categoryCount)->with('categories')->get();

            return response()->json([
                'restaurants' => $restaurants,
            ]);
        } else {
            $restaurants = Restaurant::with('categories')->get();
            return response()->json([
                'restaurants' => $restaurants
            ]);
        }
    }
}
