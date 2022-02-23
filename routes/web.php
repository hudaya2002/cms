<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
// PRAKTIKUM 1

Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    echo "Nama  : Rosis Hudaya <br>";
    echo "NIM   : 2041720053 <br>";
    echo "Kelas : TI 2G";
});

Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID : ". $id;
});