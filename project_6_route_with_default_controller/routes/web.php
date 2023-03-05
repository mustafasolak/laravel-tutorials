<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


// users ile başlayan bir url geldiğinde UsersController sınıfı bu işi halledecek
Route::get("/", function(){
    return "Ana sayfadasınız";
});

Route::resource("users", UsersController::class);


