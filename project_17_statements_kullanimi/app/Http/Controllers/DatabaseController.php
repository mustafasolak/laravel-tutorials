<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function index()
    {
        return "index function started ";
    }
    //
    public function tumKayitlar()
    {
        $users = DB::table("users")->get();
        return $users;
    }

    public function tumKayitlarWhere()
    {
        $users = DB::table("users")
            ->where("id", ">", 10)
            ->get();
        return $users;
    }

    // Retrieving A Single Row / Column From A Table
    // name değeri Mustafa olan kaydı getir
    public function whereFirst()
    {
        $users = DB::table("users")
            ->where("name", "Mustafa")
            ->first();

        // //  name=Mustafa olan kaydın email adresini getir
        // $users = DB::table("users")
        //     ->where("name", "Mustafa")
        //     ->first()
        //     ->email;

        return $users;
    }

    // Extract a single value from a record 
    // name değeri Mustafa olan kaydın email adresini getir
    public function whereSingleValue()
    {
        $email = DB::table("users")
            ->where("name", "Mustafa")
            ->value("email");
        return $email;
    }

    // find fonksiyonu kullanımı
    // id değerine göre arama yapar
    public function find()
    {
        $user = DB::table('users')->find(3);
        return $user;
    }

    // Tablonun belirli bir sütununa ait tüm verileri çekmek için
    // users tablosundaki email sütununa ait değerleri getirir
    public function pluck()
    {
        $users = DB::table('users')
            ->pluck("email");

        // ikinci parametresini anahtar değeri olarak kullanmak içn şu şekilde kullanılır.
        // users tablosundaki email adreslerini key:value şeklinde getirir.
        // key: id
        // value : email
        $users = DB::table('users')
            ->pluck("email", "id");
        return $users;
    }

    public function select()
    {
        $users = DB::table("users")
            // ->select("name","email")
            ->select("id", "name as Ad", "email as E-posta")
            ->get();
        return $users;
    }

    // Verileri rasgele sırada getirir.
    public function inRandomOrder()
    {
        $users = DB::table("users")
            ->inRandomOrder()
            ->get();
        return $users;
    }

    public function skipTake()
    {
        $users = DB::table("users")
            ->skip(5)
            ->take(3)
            ->get();
        return $users;
    }

    public function offsetLimit()
    {
        $users =  DB::table("users")
            ->offset(10)
            ->limit(5)
            ->get();
        return $users;
    }
}
