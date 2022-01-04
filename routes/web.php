<?php

use App\Http\Controllers\AgendaControllers;
use App\Http\Controllers\BeritaControllers;
use App\Http\Controllers\KontakControllers;
use App\Http\Controllers\PengurusControllers;
use App\Http\Controllers\ProfilControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaControllers;

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

Route::resource('/beranda', BeritaControllers::class);
Route::resource('/admin/profil', ProfilControllers::class);
Route::resource('/admin/kepengurusan', PengurusControllers::class);
Route::resource('/admin/agenda', AgendaControllers::class);
Route::resource('/admin/kontak', KontakControllers::class);
Route::get('/home/beranda', [BerandaControllers::class, 'index']);
Route::get('/home/profil', [BerandaControllers::class, 'profil']);
