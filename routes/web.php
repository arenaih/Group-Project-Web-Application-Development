<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
