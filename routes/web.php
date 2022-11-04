<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;

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


Route::resource('/beranda', BerandaController::class);
Route::resource('/profil', ProfilController::class);
Route::resource('/ekstrakulikuler', EkstrakulikulerController::class);
Route::resource('/galeri', GaleriController::class);