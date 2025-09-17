<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products.products');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/products/industrial', function () {
    return view('products.industrial');
});

Route::get('/products/fertilizer', function () {
    return view('products.fertilizer');
});

Route::get('/products/oilgas', function () {
    return view('products.oilgas');
});

Route::get('/products/water', function () {
    return view('products.water');
});

Route::get('/products/rubber', function () {
    return view('products.rubber');
});

Route::get('/products/papper', function () {
    return view('products.papper');
});

Route::get('/products/cosmetic', function () {
    return view('products.cosmetic');
});

Route::get('/products/food', function () {
    return view('products.food');
});


Route::get('/contact', function () {
    return view('contact');
});



Route::get('locale/{lang}', function ($lang) {
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return redirect()->back();
});


