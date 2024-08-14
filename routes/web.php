<?php

use App\Http\Controllers\Usercontroller;
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

Route::get('/import',[Usercontroller::class,'Viewimport']);
Route::post('/import',[Usercontroller::class,'import']);
Route::get('/export',[Usercontroller::class,'export']);

Route::get('/',[Usercontroller::class,'view']);
Route::get('/tambah',[Usercontroller::class,'add']);
Route::post('/tambah',[Usercontroller::class,'create']);
