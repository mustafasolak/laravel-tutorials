<?php
use App\Http\Controllers\KullanicilarController;
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
    return "Ana Sayfaya hoşgeldiniz";
});


Route::get("/kullanicilar", [KullanicilarController::class,"selamla"]);
// Route::resource('/kullanicilar', KullanicilarController::class);

// Route::get("/kullanicilar", function(){
//     // return "Kullanıcılar sayfası";
//     return view("kullanicilar");
// });

// Route::get("/kullanicilar/{id?}", function($id){
//     // return "Kullanıcılar sayfası";
//     return "Kullanıcılar sayfası ve id=$id";
// });