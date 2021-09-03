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
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/who-we-are', function () {
    return view('who-we-are');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pillars', function () {
    return view('pillars');
});

Route::get('/secretariat', function () {
    return view('secretariat');
});


Route::get('/finance', function () {
    return view('finance');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/investment', function () {
    return view('investment');
});

Route::get('/nab', function () {
    return view('nab');
});

Route::get('/si', function () {
    return view('si');
});


Route::get('/our-stand', function () {
    return view('our-stand');
});

Route::post('/mailus', function(Request $request){
    return back()
            ->with('success', 'Your message was successfully delivered.');
           
});