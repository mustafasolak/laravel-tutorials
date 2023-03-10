<?php

use App\Http\Controllers\PostController;
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


Route::get("/" ,  [PostController::class, "veriListesi"] );
Route::get("/ekle" ,  [PostController::class, "veriEkle"] );
Route::get("/guncelle" ,  [PostController::class, "veriGuncelle"] );
Route::get("/sil" ,  [PostController::class, "veriSil"] );
Route::get("/hepsiniSil" ,  [PostController::class, "tumVerileriSil"] );
Route::get("/tabloyuSil" ,  [PostController::class, "tabloyuSil"] );
