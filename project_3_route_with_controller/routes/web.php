<?php

use App\Http\Controllers\UyelerController;
use Illuminate\Support\Facades\Route;

Route::get("/", function(){
    return "Ana sayfa";
});

Route::get("/hakkimda", [UyelerController::class, "hakkimda" ]);
