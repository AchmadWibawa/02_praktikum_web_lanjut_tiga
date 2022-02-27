<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\PrefixController;
use App\Http\Controllers\ParameterController;

Route::get('/', function () {
    echo "Selamat Datang di Website Kami";
});
Route::get('/aboutUs', function(){
    echo "Pemimpin Perusahaan : Achmad Wibawa <br>
    Tanggal Didirikan : 26 Juni 2001";
});
Route::prefix('category')->group(function(){
    Route::get('/honda',[PrefixController::class,'honda']);
    Route::get('/yamaha',[PrefixController::class,'yamaha']);
    Route::get('/kawasaki',[PrefixController::class,'kawasaki']);
});
Route::prefix('news')->group(function(){
    Route::get('/',[ParameterController::class,'rekomendasi']);
    Route::get('/{nama}',[ParameterController::class,'motor']);
});
Route::prefix('program')->group(function(){
    Route::get('/karir',[PrefixController::class,'karir']);
    Route::get('/magang',[PrefixController::class,'magang']);
    Route::get('/kunjungan_industri',[PrefixController::class,'kunjungan']);
});
