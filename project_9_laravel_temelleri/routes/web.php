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

Route::get('/', function () {
    return view('anasayfa');
});

Route::prefix("temeller")->group(function () {

    Route::get("/if", function () {
        return view("temeller.if");
    });

    Route::get("/swith_case/{kullaniciTuru?}", function ($kullaniciTuru = -1) {
        return view("temeller.swith_case")->with("turDegeri", $kullaniciTuru);
    });

    Route::get("/for", function () {
        return view("temeller.for");
    });

    Route::get("/foreach", function () {
        return view("temeller.foreach");
    });

    Route::get("/while", function () {
        return view("temeller.while");
    });

    Route::get("/asset", function () {
        return view("temeller.asset");
    });
});
