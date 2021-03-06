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



Route::group(['middleware' => ['auth','verified']], function () {
    //

    
    Route::group(['middleware' => ['role:admin']], function () {
    
        Route::get('/stafhrd',function(){
            return view('stafhrd');
        })->name('stafhrd');
                
    });

    
    Route::group(['middleware' => ['role:admin|stafHrd']], function () {
        Route::get('/karyawan',function(){
            return view('karyawan');
        })->name('karyawan');
    });
    
    Route::group(['middleware' => ['role:karyawan']], function () {
        Route::get('/permohonan',function(){
            return view('permohonan');
        })->name('permohonan');
    });

});

Route::get('/', function () { 
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
