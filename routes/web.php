<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/shop', function () {
    return view('frontend.shop');
})->name('shop.index');
Route::get('/single', function () {
    return view('frontend.single');
})->name('single');
Route::get('/bestseller', function () {
    return view('frontend.bestseller');
})->name('bestseller');
Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart.index');
Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');
Route::get('/404', function () {
    return view('frontend.404');
})->name('404');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
