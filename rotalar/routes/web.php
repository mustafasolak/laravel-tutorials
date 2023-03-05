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

// Route fallback kullanımı
// Eğer belirttiğimiz rotalar dışında bir rota isteği gelirse hata meydana gelir 
// ve bizde fallback fonksiyonu ile istediğiniz bir hata sayfasını gösterebiliriz
Route::fallback(function(){
    return view("hata");
});


// Prefix Route Group Oluşturma ve Kullanımı
Route::prefix("sayfalar")->group(function(){

    Route::get("/kurumsal", function(){
        return view("kurumsal");
    });

    Route::get("/iletisim", function(){
        return view("iletisim");
    });

    Route::get("/hakkimizda", function(){
        return view("hakkimizda");
    });

    Route::get("/referanslar", function(){
        return view("referanslar");
    });

});


// Yönlendirme ile rota oluşturma
Route::redirect("/", "/anasayfa");

Route::get("/anasayfa", function(){
    return view("anasayfa");
});


/*
    Standart Rota Oluşturma
*/
/*
Route::get("/anasayfa", function(){
    return view("anasayfa");
});

Route::get("/hakkimizda", function(){
    return view("hakkimizda");
});

Route::get("/kurumsal", function(){
    return view("kurumsal");
});

Route::get("/iletisim", function(){
    return view("iletisim");
});

Route::get("/referanslar", function(){
    return view("referanslar");
});

*/

// Route::get("/", function(){
//     return "Rotalar merhaba";
// });

// Route::get('/', function () {
//     return view('welcome');
// });
