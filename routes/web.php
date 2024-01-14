<?php

use App\Http\Controllers\UndanganController;
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
    return view('pages.herlambang.index')->with(['undanganId' => 2, 'color' => 'bg-[#2c434b]']);
});

// Route::get('/zakariadanjemari', function () {
//     $template = 'pages.zakariadanjemari.index';
//     return view($template)->with(['undanganId' => 3, 'color' => 'bg-primarymini1-0']);
// });

Route::get('/s', function () {
    return view('admin.dashboard.index');
});

Route::get('{pengantin}', [UndanganController::class, 'index']);
