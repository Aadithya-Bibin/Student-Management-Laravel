<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sc;
use App\Http\Controllers\fc;

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

Route::get('/',[sc::class,'reg'])->name('main');
Route::get('registration',[sc::class,'register'])->name('regis');
Route::post('intro',[fc::class,'intro'])->name('intro');
Route::post('insert',[fc::class,'insert'])->name('in');
Route::post('check',[sc::class,'check'])->name('chck');
Route::post('update',[fc::class,'update'])->name('update');


