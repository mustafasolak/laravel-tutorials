<?php

use App\Http\Controllers\KullanicilarController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// VERİ GÖNDERME 1.YOL
Route::get('/anasayfa', function () {
    // Burada virgülden sonraki kısım view'e gidecek parametreler ve değerlerinden oluşan bir dizidir
    // sayfalar.anasayfa view'ine değeri Mustafa olan ad ve değeri SOLAK olan soyad adında
    // 2 tane parametre gönderilecektir.
    // O view içerisinde bu parametreleri karşılamak için {{$ad}} ve {{$soyad}} şeklinde kullanmak gerekir. 
    
    //return view('sayfalar.anasayfa', ["ad" => "Mustafa", "soyad" => "SOLAK"] );
    $veri = ["ad" => "Mustafa", "soyad" => "SOLAK"];
    return view('sayfalar.anasayfa', $veri );
});

// kullanicilar şeklinde bir url geldiğinde KullanicilarController içinde işlem yaptırıyorum
// Controller içerisinden view'a veri gönderiyorum
Route::resource('/kullanicilar', KullanicilarController::class);


// VERİ GÖNDERME 2.YOL
// Eğer view'a tek bir veri gönderilecekse compact("değiskenAdi") fonksiyonu kullanılabilir
Route::get("/uyeler", function(){
    $uye_adi = "mustafasolak";
    return view("sayfalar.uyeler", compact("uye_adi"));
});


// Eğer view'a tek bir veri gönderilecekse compact("değiskenAdi") fonksiyonu kullanılabilir
// Gönderilecek veri illa ki string olmak zorunda değil. Dizi de gönderebiliriz.
Route::get("/profil", function(){
    $uye_bilgileri = array(
        "uye_id"  => 45,
        "uye_adi" => "mustafasolak",
        "uye_email" => "mustafasolak48@gmail.com",
    );
    return view("sayfalar.profil", compact("uye_bilgileri"));
});

// VERİ GÖNDERME 3.YOL
// with İLE VERİ GÖNDERME
// return view(v)->with(parametreAdi, parametreDegeri) şeklinde kullanılır
Route::get("/kategoriler", function(){
    $kategoriler = [
        array(
            "kategori_id" => 1,
            "kategori_adi" => "HTML",
        ),
        array(
            "kategori_id" => 2,
            "kategori_adi" => "CSS",
        ),
        array(
            "kategori_id" => 3,
            "kategori_adi" => "Javascript",
        ),
    ];
    // view'e with() ile kategoriler adında parametreyi ve değeri olan kategoriler adındaki diziyi gönderiyorum
    return view("sayfalar.kategoriler")->with("kategoriler", $kategoriler);
});
