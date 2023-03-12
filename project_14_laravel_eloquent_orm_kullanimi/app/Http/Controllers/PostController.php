<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    /*
        VERİ LİSTELEME
    */
    public function veriListele()
    {
        // 2 yol ile verileri çekebiliriz.
        // 1.yol  POST::query->get();
        // $veriler = POST::query()->get();
        
        // 2.yol   POST::all();
        $veriler = POST::all();

        return view("veriListesi", ["veriler" => $veriler]);
    }


    // Belirli bir şarta bağlı olarak verileri çekme ve sıralama
    public function veriListele2()
    {
        // $veriler = POST::query()->get();
        // id değeri 1'den büyük olan kayıtları id alanına göre büyükten küçüğe sıralanmış halde getirelim
        $veriler = POST::where("id", ">", 1)->orderBy("id", "DESC")->get();

        // veriListesi view'ımıza veriler adında bir değişken ile veri gönderiyoruz. 
        // veriListesi view'ı içerisinde de {{$veriler}} şeklinde kullanarak gönderdiğimiz veriye ulaşabiliriz.
        return view("veriListesi", ["veriler" => $veriler]);
    }

    // Güncelleme işlemi için öncelikle kaydı bulmak gerekiyor. Bunun için 
    // primary key'e göre arama yapan find() fonksiyonunu kullanıyoruz.
    public function veriGuncelle()
    {
        $id  = 33;
        $guncelle = Post::query()->find($id);
        $guncelle->isim = "Değişen Ali";
        $guncelle->soyisim = "Değişen Soyisim";

        // save() fonksiyonu ile de verileri kaydediyoruz.
        $guncelle->save();
        echo "Veri güncellendi";
    }
// Belirli şarta bağlı olarak verileri güncellemek için aşağıdaki gibi bir kullanım vardır.
    public function topluGuncelle()
    {
        $duzenle = Post::where("id",  ">", 15)->update(["isim" => "Toplu Güncellendi"]);
        echo "id>15 olan kayıtlar güncellendi";
    }

    // KAyıt silmek için aynı güncelleme işleminde olduğu gibi önce primary key değerine göre
    // kaydı buluyoruz. Ardından kaydı siliyoruz.
    public function kayitSil(){
        $id= 10;
        $sil = Post::query()->find($id);
        echo "<pre>";
        var_dump($sil);
        echo "</pre>";
        if($sil){
            $sil->delete();
            echo "$id numaralı kayıt silindi";
        }else echo "Aranan kayıt bulunamadı";
        
    }

    public function topluSil(){
        $topluSil = Post::where("id", ">", 15)->delete();
        echo "id>15 olan kayıtlar silindi";
    }


    /////////////////////////////////////////////////////////////////



    /*
        Verileri kaydetmek için 2 yol vardır.
    */

    // 1.YOL
    public function kayit1()
    {
        $post = new Post;
        $post->isim = "Kazım";
        $post->soyisim = "KARA";
        $post->save();
        echo "Veriler kaydedildi kayit1";
    }

    // 2.YOL
    // Model içinde fillable alanları tanımlamayı UNUTMA !!!
    public function kayit2()
    {
        Post::create([
            "isim" => "Haydar",
            "soyisim" => "KAÇMAZ",
        ]);
        echo "Veriler eklendi kayit2";
    }
}
