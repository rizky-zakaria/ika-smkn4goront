<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\RouteGroup;
use Illuminate\Auth\Events\Verified;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [WebController::class, 'index']);
Route::get('/profil', [WebController::class, 'profil']);
Route::get('/pengurus', [WebController::class, 'pengurus']);
Route::get('/kontak', [WebController::class, 'kontak']);
Route::get('/agenda', [WebController::class, 'agenda']);
Route::get('/berita/{id}', [WebController::class]);
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Auth::routes();
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->resource('/admin', 'DashboardController');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/admin', 'DashboardController');
    Route::resource('home/kepengurusan', 'PengurusController');
    Route::resource('home/alumni', 'AlumniController');
    Route::resource('home/berita', 'BeritaController');
    Route::resource('home/komentar', 'KomentarController');
    Route::resource('home/agenda', 'AgendaController');
    Route::get('home/alumni/cetak_pdf/{id}', 'AlumniController@cetak_pdf');
    Route::get('home/agenda/cetak_pdf/{id}', 'AgendaController@pdf');
    Route::get('/berita/action', 'LiveSearch@action')->name('berita.action');
});
