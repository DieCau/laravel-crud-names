<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

//        path    controller    metodo       nombre de ruta
//          |         |           |                  |
Route::get('/', [Users::class, 'index']) -> name('index');

