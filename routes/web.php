<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjekController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'home']);
Route::get('/blog/projek',[ProjekController::class,'projek']);
Route::get('/blog/kontak',[KontakController::class,'kontak']);