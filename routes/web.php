<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perusahaanController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\dashboardController;



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



Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('perusahaan',perusahaanController::class);
    Route::resource('produk', produkController::class);
    Route::resource('project', projectController::class);
    Route::resource('act', activityController::class);
    Route::resource('jadwal', jadwalController::class);

});

Route::group(['middleware'=>['auth']], function(){
    Route::get('/user', function () {
        return view('layouts.user');

    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
