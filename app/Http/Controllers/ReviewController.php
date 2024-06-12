<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index(Request $request)
{
    $restaurants = Restaurant::all();
    $selectedRestaurant = $request->get('restaurant_id');
    $reviews = [];

    if ($selectedRestaurant) {
        $reviews = Review::where('restaurant_id', $selectedRestaurant)->get();
    }

    return view('reviewlist', compact('restaurants', 'reviews', 'selectedRestaurant'));
}

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('review', compact('restaurants'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,restaurant_id',
            'review' => 'required|string|max:500',
            'rating' => 'required|integer|between:1,5',

        ]);


        Review::create([
            'user_id' => Auth::id(),
            'restaurant_id' => $request->restaurant_id,
            'review' => $request->review,
            'rating' => $request->rating,

        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
