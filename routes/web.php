<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pengguna/index', [PenggunaController::class,'login']);
Route::get('/tugas/detailTugas/{id}',[TodoController::class,'detailTugas']);
Route::get('/tugas/hapusTugas/{id}',[TodoController::class,'hapusTugas']);
Route::get('/lihatData', [TodoController::class, 'tampilkanTodo']);
Route::get('/tugas/tambahTugas', [TodoController::class, 'tambahTugas']);
Route::get('/tugas/ubahTugas', [TodoController::class, 'ubahTugas']);
Route::post('/tugas/simpanTugasBaru', [TodoController::class, 'simpanTugas']);