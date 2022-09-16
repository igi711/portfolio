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
    return view('pages/index');
});

Route::get('/index', function () {
    return view('pages/index');
});

Route::get('/aboutme', function () {
    return view('pages/aboutme');
});

Route::get('/work', function () {
    return view('pages/work');
});

Route::get('/cv', function () {
    return view('pages/cv');
});

Route::get('/contactme', function () {
    return view('pages/contactme');
});

Route::get('/aboutme/work', function () {
    return view('pages/work');
});