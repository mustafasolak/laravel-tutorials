<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::get("create",[CustomerController::class, "create"]);
Route::get("update",[CustomerController::class, "update"]);
Route::get("readOrder",[CustomerController::class, "readOrder"]);
Route::get("readBilling",[CustomerController::class, "readBilling"]);
Route::get("deleteOrder",[CustomerController::class, "deleteOrder"]);
Route::get("deleteBilling",[CustomerController::class, "deleteBilling"]);