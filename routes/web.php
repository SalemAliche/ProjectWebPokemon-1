<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Accueil */
Route::get('/', function () {
    return view('welcome');
});
/* Pokemon */
Route::get('/pk/accar', function () {
    return view('pokemon/actucartes');
});
Route::get('/pk/li', function () {
    return view('pokemon/listecartes');
});
Route::get('/pk/top', function () {
    return view('pokemon/topcartes');
});
Route::get('/pk/mo', function () {
    return view('pokemon/meilleursoffres');
});
Route::get('/pk/act', function () {
    return view('pokemon/actusuniv');
});
Route::get('/pk/jv', function () {
    return view('pokemon/jeuxvideos');
});
Route::get('/pk/cl', function () {
    return view('pokemon/coinlecture');
});
Route::get('/pk/fo', function () {
    return view('pokemon/forums');
});
Route::get('/boutique', function () {
    return view('pokemon/boutique');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
