<?php

use App\Mail\Note;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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

Route::get('/technical', function () {
    return view('technical');
});

Route::get('/investment', function () {
    return view('investment');
});

Route::get('/investment-listing', function () {
    return view('investment-listing');
});

Route::get('/nab', function () {
    return view('nab');
});

Route::get('/si', function () {
    return view('si');
});

Route::get('/partners', function () {
    return view('partners');
});


Route::get('/our-stand', function () {
    return view('our-stand');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::post('/mailus', function(Request $request){
    error_log(" -> name: " . $request->name ." -> message: " . $request->message . " -> subject: " . $request->subject . " -> email: " . $request->email);

    $user = new User([
        "email" => "info@fintrinet.or.ke"
    ]);

    $details = new stdClass();
    $details->name = $request->name;
    $details->message = $request->message;
    $details->subject = $request->subject;
    $details->email = $request->email;

    Mail::to($user)->queue(new Note($details));

    return back()
            ->with('success', 'Your message was successfully delivered.');
           
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
