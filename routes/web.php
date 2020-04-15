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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/fam-a', function () {
    return view('form-fam-a');
});

Route::get('/fam-b', function () {
    return view('form-fam-b');
});

Route::get('/ind-a', function () {
    return view('form-ind-a');
});

Route::get('/ind-b', function () {
    return view('form-ind-b');
});



