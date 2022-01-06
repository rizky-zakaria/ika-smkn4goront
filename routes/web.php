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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'index']);
Route::get('/profil', [WebController::class, 'profil']);
Route::get('/pengurus', [WebController::class, 'pengurus']);
Route::get('/kontak', [WebController::class, 'kontak']);
Route::get('/agenda', [WebController::class, 'agenda']);
Auth::routes();
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->resource('/admin', 'DashboardController');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/admin', 'DashboardController');
    Route::resource('/admin/kepengurusan', 'PengurusController');
    Route::resource('/admin/alumni', 'AlumniController');
    Route::resource('/admin/berita', 'BeritaController');
    Route::resource('/admin/komentar', 'KomentarController');
    Route::resource('/admin/agenda', 'AgendaController');
});
