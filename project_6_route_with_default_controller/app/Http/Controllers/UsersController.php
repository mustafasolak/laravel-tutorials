<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*
        Eğer yapılacak işlemler temel işlemler ise bu şekilde kullanabiliriz.
        
        Varsayılan fonksiyonlar şunlardır: 
            Not: Tümünü eklemedim.
            
        -----------------------------------------------------------
        İşlem   |   URL               |   Action      |   Route Name
        -----------------------------------------------------------
        GET     |   /users            |   index       |   users.index
        GET     |   /users/create     |   create      |   users.create
        GET     |   /users/{id}       |   show        |   users.show
        GET     |   /users/{id}/edit  |   edit        |   users.edit

    */
    public function index(){
        return "Burası users  sayfası index() fonksiyonu";
    }

    public function create(){
        return "Burası users  create() fonksiyonu";
    }

    public function show($id){
        return "Burası users show($id) fonksiyonu ";
    }

    public function edit($id){
        return "Burası users edit($id) fonksiyonu ";
    }

    // public function selamla(){
    //     return "Selamlar :) ";
    // }

}
