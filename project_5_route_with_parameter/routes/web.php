<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Ana sayfaya hoşgeldiniz !";
});

// URL'deki parametreleri alabilmek için gerekli olan kullanım
// Örneğin /uyeler/954/profil şeklinde bir url geldiğinde
// 954 değeri id parametresine, profil değeri de sayfa parametresine atılır.
// Eğer parametreler boş gelirse hata meydana gelir. Bunun için parametrelerin
// boş olabileceğini belirten soru işareti ? karakterini kullanmalıyız
// Bunun yanında da id ve sayfa değişkenlerinin varsayılan değerlerini de boş olacak şekilde ayarlayabiliriz.
Route::get("/uyeler/{id?}/{sayfa?}" , function($id="", $sayfa = ""){
    $str = "";
    if($id != "")
        $str = "Üye ID :$id <br>";
    if($sayfa != "")
        $str .= "Sayfa = $sayfa ";
    return "<center>$str</center>";
});

// Eğer gelen url'in karşılığı yoksa yakalayabiliriz.
// Bu sayede istediğimiz hata sayfasını ya da mesajını gösterebiliriz.
Route::fallback(function(){
    return "Aranan sayfa mevcut değil !";
});


Route::redirect("/uyelerim", "/uyeler");