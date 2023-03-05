<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return "Ana sayfadasınız";
});


// // Sayfalar ile başlayan tüm url'leri grupladık. Böylece aşağıdaki gibi her seferinde url 
// // önüne /sayfalar eklemeye gerek kalmadı.
// Route::prefix("sayfalar")->group(function () {

//     Route::get("/hakkimda", function () {
//         return view("sayfalar.hakkimda");
//     });

//     Route::get("/iletisim", function () {
//         return view("sayfalar.iletisim");
//     });
// });

// group da prefix mantığı ile çalışır. Bu yukarıdakinden daha temiz bir kullanımdır.
Route::group(["prefix" => "sayfalar"], function () {
    Route::get("/hakkimda", function () {
        return view("sayfalar.hakkimda");
    });

    Route::get("/iletisim", function () {
        return view("sayfalar.iletisim");
    });
});


// Route::get("/sayfalar/hakkimda", function(){
//     return view("sayfalar.hakkimda");
// });

// Route::get("/sayfalar/iletisim", function(){
//     return view("sayfalar.iletisim");
// });
