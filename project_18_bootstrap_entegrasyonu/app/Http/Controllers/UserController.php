<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        // $users = User::query()->get();
        $users = User::paginate(10);
        return  view("ckeditor", compact("users"));
    }
}
