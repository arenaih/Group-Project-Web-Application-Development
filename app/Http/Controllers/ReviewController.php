<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index(Request $request)
{

    $reviews = Review::all();

    return view('reviewlist', compact('reviews'));
}

    public function create()
    {

        return view('review');
    }

    public function store(Request $request)
    {



        $review= new Review();
        $review->restaurant_name=$request->restaurant_name;
        $review->review=$request->review;
        $review->rating=$request->rating;
        $review->created_at=today();
        $review->updated_at=today();
        $review->save();
        return redirect('review')->with('success', 'review created successfully.');


    }
}
