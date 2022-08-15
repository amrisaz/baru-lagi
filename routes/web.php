<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KaryawanController;



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
//route halaman Pelajar
Route::get('/pelajar',[PelajarController::class,'index']);
Route::get('/pelajar/create',[PelajarController::class,'create']);
Route::post('/pelajar/store',[PelajarController::class,'store']);
Route::get('/pelajar/{id}/edit',[PelajarController::class,'edit']);
Route::put('/pelajar/{id}',[PelajarController::class,'update']);
Route::delete('pelajar/{id}',[PelajarController::class,'destroy']);


//route halaman dosen
Route::get('/dosen',[DosenController::class,'index']);
Route::get('dosen/create',[DosenController::class,'create']);
Route::post('dosen/store',[DosenController::class,'store']);
Route::get('dosen/{id}/edit',[DosenController::class,'edit']);
Route::put('dosen/{id}',[DosenController::class,'update']);
Route::delete('dosen/{id}',[DosenController::class,'destroy']);

//routes halaman karyawan
Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit',[KaryawanController::class,'edit']);
Route::put('karyawan/{id}',[KaryawanController::class,'update']);
Route::delete('karyawan/{id}',[KaryawanController::class,'destroy']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
