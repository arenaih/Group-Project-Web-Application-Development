<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = DB::table('restaurants')->orderBy('restaurant_id', 'asc')->get();
        return view('restaurants', ['restaurants' => $restaurants]);
    }

    public function index2()
    {
        $restaurants = DB::table('restaurants')->orderBy('restaurant_id', 'asc')->get();
        return view('listing', ['restaurants' => $restaurants]);
    }

    public function index3()
{
    $restaurants = Restaurant::all(); // or use pagination if needed
    return view('home', compact('restaurants'));
}

    public function create()
    {
        return view('create_restaurant');
    }

    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|unique:restaurants,restaurant_id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'cuisine_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('images', 'public');

        // Create new restaurant
        $restaurant = new Restaurant();
        $restaurant->restaurant_id = $request->restaurant_id;
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->cuisine_type = $request->cuisine_type;
        $restaurant->price = $request->price;
        $restaurant->image_url = $imagePath;
        $restaurant->created_at = now();
        $restaurant->updated_at = now();
        $restaurant->save();

        return redirect('restaurants')->with('success', 'Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('edit-restaurant', ['restaurant' => $restaurant]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'cuisine_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $restaurant = Restaurant::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $restaurant->image_url = $imagePath;
        }

        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->cuisine_type = $request->cuisine_type;
        $restaurant->price = $request->price;
        $restaurant->updated_at = now();
        $restaurant->save();

        return redirect('restaurants')->with('success', 'Restaurant updated successfully.');
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();

        return redirect('restaurants')->with('success', 'Restaurant deleted successfully.');
    }
}
