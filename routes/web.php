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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function (){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //admin
    Route::group(['middleware' => ['role']], function(){

    Route::get('/daftar', [App\Http\Controllers\TiketController::class, 'daftar'])->name('daftar');    
    Route::get('/daftarDelete/{id}', [App\Http\Controllers\TiketController::class, 'daftarDelete'])->name('daftarDelete');    
    Route::patch('/daftarUpdate/{id}', [App\Http\Controllers\TiketController::class, 'daftarUpdate'])->name('daftarUpdate');  

    Route::get('/laporan', [App\Http\Controllers\TiketController::class, 'laporan'])->name('laporan');  
    
    Route::get('/checkin', [App\Http\Controllers\TiketController::class, 'checkin'])->name('checkin'); 
    Route::patch('/checkin/{id}', [App\Http\Controllers\TiketController::class, 'checkinUpdate'])->name('checkinUpdate');   
    });

    //user
    Route::get('/pemesanan', [App\Http\Controllers\TiketController::class, 'index'])->name('pemesanan');
    Route::post('/pemesananPost', [App\Http\Controllers\TiketController::class, 'pemesananPost'])->name('pemesananPost');

    Route::get('/lihattiket', [App\Http\Controllers\TiketController::class, 'lihattiket'])->name('lihattiket');
});

