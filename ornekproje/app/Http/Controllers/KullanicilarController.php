<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullanicilarController extends Controller
{
    public function index(){
        return "Selam";
    }

    public function show($id){
        return "show function id:$id";
    }

    public function selamla(){
        return "Selamlar sana :)";
    }
}
