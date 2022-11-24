<?php

use App\Http\Controllers\TodolistController;
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

Route::get('/index',[TodolistController::class,'index'])->name('index');
Route::post('/index-create',[TodolistController::class,'store'])->name('store');
Route::get('/index/edit/{id}',[TodolistController::class,'edit'])->name('edit');
Route::get('/index/destroy/{id}',[TodolistController::class,'destroy'])->name('destroy');
Route::post('/index/update/{id}',[TodolistController::class,'update'])->name('update');

