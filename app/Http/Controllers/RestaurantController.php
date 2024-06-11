<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = DB::table('restaurants')
        ->orderBy('restaurant_id','asc')
        ->get();
        return view('restaurants',['restaurants'=>$restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $restaurants=new Restaurant();
        $restaurants->restaurant_id=$request->restaurant_id;
        $restaurants->name=$request->name;
        $restaurants->address=$request->address;
        $restaurants->phone=$request->phone;
        $restaurants->cuisine_type=$request->cuisine_type;
        $restaurants->price=$request->price;
        $restaurants->created_at=today();
        $restaurants->updated_at=today();
        $restaurants->save();
        return redirect('restaurants');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
