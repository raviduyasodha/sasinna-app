<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoBookingController;

Route::view('/', 'home');
Route::view('/products', 'products');
Route::view('/gallery', 'gallery');
Route::view('/book-demo', 'book-demo');
Route::view('/contact', 'contact');
Route::get('/book-demo', [DemoBookingController::class, 'showForm'])->name('book-demo.show');
Route::post('/book-demo', [DemoBookingController::class, 'submit'])->name('book-demo.submit');