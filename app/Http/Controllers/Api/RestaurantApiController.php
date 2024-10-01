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
        if ($request->categories) {
            // Controlla che i dati siano validi
            $request->validate([
                'categories.*' => 'integer|exists:categories,id'
            ]);

            // Se ho una singola categoria la trasformo in array così che il whereIn sia in grado di gestirlo
            $categories = array($request->categories);
            // Conto quante categorie sono state selezionate
            $categoryCount = count($categories);

            // Trova ristoranti che hanno tutte le categorie specificate
            $restaurants = Restaurant::whereHas('categories', function ($query) use ($categories) {
                $query->where('categories.id', $categories);
            }, '=', $categoryCount)->with('categories')->get();
        }

        return response()->json([
            'restaurants' => $restaurants,
        ]);
    }
}
