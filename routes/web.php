<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;

use function PHPUnit\Framework\returnSelf;

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

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/destinations', 'destinations');
Route::view('/advice', 'advice');

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

Route::get('/user/{name?}', function (?string $name = null) {
    if (!session()->has('username'))
        return redirect('/login');

    if (!$name)
        return redirect('/user' . '/' . session()->get('username'));

    return view('user');
});

Route::view('/blog', 'blog');
Route::view('/contact', 'contact');
