<?php

use App\Http\Controllers\DatabaseController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function() {
    $arr = array();
    
    Artisan::call('cache:clear');
    $arr[] = 'Application cache has been cleared';
    
    Artisan::call('route:cache');
    $arr[] = 'Routes cache has been cleared';


    Artisan::call('config:cache');
    $arr[] = 'Config cache has been cleared';

    Artisan::call('view:clear');
    $arr[] =  'View cache has been cleared';

    return $arr;

});

Route::get('/', function () {

    // // // users tablosundaki tüm kayıtları getirir
    // $users = DB::table("users")
    //     ->get();

    // // // users tablosundaki id değeri 50'den büyük olanları getirir.
    // $users = DB::table("users")
    //     ->where("id", ">", 50)
    //     ->get();

    // // users tablosundaki name sütunundaki kayıtları getirir.
    // $users = DB::table("users")->pluck("name");

    // // users tablosundaki id değeri 51'den büyük olan kayıtların isimlerini getirir.
    // $users = DB::table("users")
    //     ->where("id", ">", 50)
    //     ->pluck("name");


    // return $users;
    return "Veritabanı işlemleri";
});

// Route::get('/db', [DatabaseController::class, 'tumKayitlar']);

Route::prefix("db")->group(function(){

    Route::get("/tumKayitlar", [DatabaseController::class, "tumKayitlar"]);
    Route::get("/tumKayitlarWhere", [DatabaseController::class, "tumKayitlarWhere"]);
    Route::get("/whereFirst", [DatabaseController::class, "whereFirst"]);
    Route::get("/whereSingleValue", [DatabaseController::class, "whereSingleValue"]);
    Route::get("/find", [DatabaseController::class, "find"]);
    Route::get("/pluck", [DatabaseController::class, "pluck"]);
    Route::get("/select", [DatabaseController::class, "select"]);
    Route::get("/inRandomOrder", [DatabaseController::class, "inRandomOrder"]);
    Route::get("/skipTake", [DatabaseController::class, "skipTake"]);
    Route::get("/offsetLimit", [DatabaseController::class, "offsetLimit"]);

});






// Route::get('db', [DatabaseController::class, "tumKayitlar"]);

