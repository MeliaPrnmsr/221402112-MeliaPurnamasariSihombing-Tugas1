<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminControllers;
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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [AdminControllers::class,'index']);
Route::get('/admin/profil', [AdminControllers::class,'show_profil']);
Route::get('/admin/layanan', [AdminControllers::class,'show_layanan']);
Route::get('/admin/aktivitas', [AdminControllers::class,'show_aktivitas']);
Route::get('/admin/agenda', [AdminControllers::class,'show_agenda']);
Route::get('/admin/koleksiumum', [AdminControllers::class,'show_koleksiumum']);
Route::get('/admin/bukubaru', [AdminControllers::class,'show_bukubaru']);

