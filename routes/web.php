<?php

use Illuminate\Support\Facades\Route;

// Panggil ProductController yang tadi kita buat
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Daftarkan route resource untuk products
Route::resource('/products', ProductController::class);