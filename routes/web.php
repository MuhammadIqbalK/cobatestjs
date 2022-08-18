<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

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


    // Route::get('/', function () {
    // return view('testindex');});
    // Route::get('/', 'App\Http\Controllers\dataperusahaanController@index');


     Route::get('/', function () {
        return view('beranda');
    });
//route tabel data perusahaan
    Route::resource('dataperusahaan', '\App\Http\Controllers\dataperusahaanController');
    

 //route login dan daftar   
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::get('/daftar', function () {
        return view('daftar');
    })->name('daftar');
    
    Route::get('/email-success', function () {
        return view('email-success');
    })->name('email-success');
    
    Route::post('/daftar', [RegisterController::class, 'store'])->name('daftar');
    
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logoout');
    
    Route::get('/beranda', [BerandaController::class, 'index']);
    
    Route::group(['middleware' => ['auth', 'cekrole:admin']], function() {
        Route::get('/beranda-admin', [BerandaController::class, 'berandaadmin'])->name('beranda-admin');
    });
    
    Route::group(['middleware' => ['auth', 'cekrole:user']], function() {
        Route::get('/beranda-user', [BerandaController::class, 'berandauser'])->name('beranda-user');
    });
    
    Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail']);
    Route::post('/forget-password', [ForgotPasswordController::class, 'postEmail']);
    
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
    Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword']);  
