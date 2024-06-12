<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Facades\DB;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tables = DB::table('tables')
        ->latest()
        ->get();
        return view('table',['tables'=>$tables]);

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
        //
        $book= new Table();
        $book->name=$request->name;
        $book->email=$request->email;
        $book->phone=$request->phone;
        $book->date=$request->date;
        $book->time=$request->time;
        $book->people=$request->people;
        $book->message=$request->message;
        $book->created_at=today();
        $book->updated_at=today();
        $book->save();
        return redirect('table')->with('success', 'Booking created successfully.');

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
