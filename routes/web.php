<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/superviseur', function () {
    return view('superviseur.superviseur');
});

Route::get('/inventaire', function () {
    return view('inventaire.inventaire');
});

Route::get('/administrateur', function () {
    return view('administrateur.administrateur');
});

Route::get('/comptable', function () {
    return view('comptable.comptable');
});

