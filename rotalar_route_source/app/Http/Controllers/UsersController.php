<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return "Burası Kullanıcılar sayfası index() function";
    }

    public function create(){
        return "Burası kullanıcı oluşturma sayfası";
    }

    public function show(){
        return "Burası show() fonksiyonu içinden geldi";
    }

    public function selamla(){
        return "Selamlar usta ";
    }

}
