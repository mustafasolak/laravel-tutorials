<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullanicilarController extends Controller
{
    public function index()
    {
        return view("sayfalar.kullanicilar");
    }

    public function show($gelenId)
    {
        // kullanici_goster sayfasına gelen id değerini parametre olarak gönderiyorum.
        return view("sayfalar.kullanici_goster", ["id" => $gelenId]);
    }
}
