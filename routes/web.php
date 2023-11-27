<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\HTTP\Controllers\DatabaseController;

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


/* CONTENT */

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/destinations', 'destinations');
Route::view('/advice', 'advice');


/* LOGIN/LOGOUT */
Route::post('/login', [UserController::class, 'login']);

Route::get('/login', function () {
    if (session()->has('username'))
        return redirect('/user/{name}')->with('name', session()->get('username'));
    return view('login');
});

Route::get('/logout', function () {
    session()->invalidate();
    return redirect('/home');
});


/* USER ACTION*/
Route::get('/user/{name?}', function (?string $name = null) {
    if (!session()->has('username'))
        return redirect('/login');
    if (!$name)
        return redirect("/user/{session()->get('username')}");
    return view('user');
});


/* DATABSE */
Route::controller(DatabaseController::class)->group(function () {
    Route::get('/users/{id?}', 'show');
});


Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
