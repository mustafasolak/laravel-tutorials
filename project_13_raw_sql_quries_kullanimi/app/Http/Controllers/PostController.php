<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function veriListesi()
    {
        $veriler = DB::select('select * from post',);
        return view("veriListesi", ["veriler" => $veriler]);
    }

    public function veriEkle()
    {
        $eklenecekVeriler = [
            "Mustafa",
            "SOLAK",
            "Deneme yazı",
            "Telefon",
            "mail",
            "88.248.145.54",
            "Chrome",
            "#b4cd86",
            "https://via.placeholder.com/200x200.png/005599?text=solak",
            21132070,
            "Adres bilgisi",

        ];
        $ekle = DB::insert("insert into post(isim, soyisim, yazi, telefon, mail, ipAdresi, tarayici, renk, image,barkod, adres) values (?,?,?,?,?,?,?,?,?,?,?)", $eklenecekVeriler);
        if ($ekle)
            print("Veri başarıyla eklendi");
        else
            echo "Veri eklenemedi";
    }

    public function veriGuncelle()
    {
        $guncelle = DB::update('update post set isim =?, soyisim=? where id = ?', ['Yıldırım', "FIRTINA", 21]);
        if ($guncelle)
            echo "Veri güncellendi";
        else echo "Veri güncellenemedi";
    }

    public function veriSil()
    {
        $sil = DB::delete("delete from post where id=?", [2]);
        if ($sil)
            echo "Veri silindi";
        else echo "Veri silinemedi";
    }

    public function tumVerileriSil()
    {
        $sil = DB::statement("truncate table post");
        if ($sil)
            echo "Veriler silindi";
        else echo "Veriler silinemedi";
    }

    public function tabloyuSil()
    {
        $sil = DB::statement("drop table post");
        if ($sil)
            echo "Tablo silindi";
        else echo "Tablo silinemedi";
    }
}
