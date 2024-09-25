<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('auth.register', compact('categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'user_name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg,webp', 'max:2048'],
            'p_iva' => ['required', 'string', 'size:11', 'regex:/^\d+$/'],
            'address' => ['required', 'string', 'min:2', 'max:255'],
            'phone_number' => ['required', 'size:10', 'regex:/^\d+$/'],
            'categories' => ['required', 'array', 'min:1'],
            'categories.*' =>  ['exists:categories,id']

        ]);


        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads', 'public');
        } else {
            $image = null;
        }

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'image' => $image,
            'p_iva' => $request->p_iva,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);
        $restaurant->categories()->attach($request->categories);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
