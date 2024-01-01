<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/luxury', function () {
    return view('pages.luxury.index');
});

Route::get('/luxury-2', function () {
    return view('pages.luxury-2.index');
});

Route::get('/gallery', function () {
    return view('pages.luxury.gallery');
});

Route::get('/vintadanreza', function () {
    return view('pages.vintadanreza.index');
});

Route::get('/herlambang', function () {
    return view('pages.herlambang.index');
});

Route::get('/zakariadanjemari', function () {
    return view('pages.zakariadanjemari.index');
});

Route::get('/tes', function () {
    return view('pages.tes');
});

