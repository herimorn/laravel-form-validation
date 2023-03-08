<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\loginsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great

//the form validation is the process of taking the incoming data
*/

Route::get("/login",[LoginController::class,'index'])->name("login");
Route::post("/login",[loginController::class,'handleLogin'])->name("login.submit");
