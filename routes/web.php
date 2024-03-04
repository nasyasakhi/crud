<?php

use App\Http\Controllers\BuahController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BuahController::class)->group(function(){
    Route::get('/buah', 'index')->name('buah.index');
    Route::get('/buah/create', 'create')->name('buah.create');
    Route::post('/buah/store', 'store')->name('buah.store');
    Route::get('/buah/show/{id}', 'show')->name('buah.show');
    Route::get('/buah/edit/{id}', 'edit')->name('buah.edit');
 //    put untuk edit
    Route::put('/buah/update/{id}', 'update')->name('buah.update');
    Route::put('/buah/update/{id}', 'update')->name('buah.update');
    Route::get('/buah/delete/{id}', 'destroy')->name('buah.destroy');
 });
