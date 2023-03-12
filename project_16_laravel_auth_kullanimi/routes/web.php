<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::redirect("/home", "/");

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::prefix("user")->middleware("auth")->group(function(){

    Route::get("settings", [HomeController::class, "settings"] )->name("settings");

});
