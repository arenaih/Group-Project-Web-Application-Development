<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('loginpage');
});

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('mainpage');
    })->name('dashboard');
});

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');


Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/add-restaurant', function() {
    return view('add-restaurant');
});
Route::resource('addrestaurant', RestaurantController::class);

Route::get('/listing', [RestaurantController::class, 'index2']);

Route::get('/edit-restaurant/{id}', [RestaurantController::class, 'edit']);
Route::put('/update-restaurant/{id}', [RestaurantController::class, 'update']);
Route::delete('/delete-restaurant/{id}', [RestaurantController::class, 'destroy']);
