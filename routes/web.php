<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\malController;

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

Route::get('/', [ApiController::class ,'InicioRoute'])->name('index');

Route::get('/generic', [ApiController::class ,'GenericRoute'])->name('generic');

Route::get('/elements', [ApiController::class ,'ElementsRoute'])->name('elements');

Route::get('/', [malController::class,'mostrarVirus'])->name('index');