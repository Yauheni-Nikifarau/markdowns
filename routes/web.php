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
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/trips', function () {
    return view('trips');
});

Route::get('/trip', function () {
    return view('trip');
});

Route::get('/hotels', function () {
    return view('hotels');
});

Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile_me');
});

Route::get('/profile/orders', function () {
    return view('profile_orders');
});

Route::get('/profile/order', function () {
    return view('profile_order');
});

Route::get('/profile/messages', function () {
    return view('profile_messages');
});

Route::get('/profile/message', function () {
    return view('profile_message');
});