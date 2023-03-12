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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/kayit1", [PostController::class , "kayit1"]);
Route::get("/kayit2", [PostController::class , "kayit2"]);
Route::get("/veriListele", [PostController::class, "veriListele"]);
Route::get("/veriListele2", [PostController::class, "veriListele2"]);
Route::get("/veriGuncelle", [PostController::class, "veriGuncelle"]);
Route::get("/topluGuncelle", [PostController::class, "topluGuncelle"]);
Route::get("/kayitSil", [PostController::class, "kayitSil"]);
Route::get("/topluSil", [PostController::class, "topluSil"]);