<?php

use App\Http\Controllers\UTSController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});


Route::get('/uts',[UTSController::class,'index'])->name('index');
Route::get('/uts/create',[UTSController::class, 'create'])->name('create');
Route::post('/uts',[UTSController::class, 'create'])->name('create');
