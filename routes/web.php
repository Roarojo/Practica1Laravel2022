<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaContoller;

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
    return view('datos');
})->name('oper');


Route::get('suma',[SumaContoller::class,'vistaSuma'])->name('suma');

Route::post('suma', [SumaContoller::class,'mostrarDatos'])->name('suma');
