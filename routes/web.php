<?php

use App\Http\Controllers\FilmController;
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
    return view('welcome');
});

Route::get('/datafilm',[FilmController::class,'index'])->name('datafilm');
Route::get('/tambahdata',[FilmController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[FilmController::class,'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}',[FilmController::class,'tampildata'])->name('tampildata');
Route::post('/update/{id}',[FilmController::class,'update'])->name('update');
Route::get('/delete/{id}',[FilmController::class,'delete'])->name('delete');

