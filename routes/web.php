<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

//        path    controller    metodo       nombre de ruta
//          |         |           |                  |
Route::get('/', [UsersController::class, 'index'])->name('index');

Route::get('/create', [UsersController::class, 'create'])->name('create');

Route::post('/store', [UsersController::class, 'store'])->name('store');



