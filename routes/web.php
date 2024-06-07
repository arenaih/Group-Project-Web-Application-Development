<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('outpage');
});

Route::get('/frontpage', function () {
    return view('frontpage');
})->name('frontpage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontpage');
    })->name('dashboard');
});

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
