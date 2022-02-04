<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('Pages.about');
});

Route::get('/contact', function () {
    return view('Pages.contact');
});

Route::get('/especes', function () {
    return view('Pages.especes');
});

Route::get('/product', function () {
    return view('Pages.product');
});
