<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\TugasController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index', [PenggunaController::class,'login']);
Route::get('/tugas/detailTugas/{id}',[TodoController::class,'detailTugas']);
Route::get('/tugas/hapusTugas/{id}',[TodoController::class,'hapusTugas']);
Route::get('/lihatData', [TodoController::class, 'tampilkanTodo']);
Route::get('/tugas/tambahTugas', [TodoController::class, 'tambahTugas']);
Route::get('/tugas/ubahTugas', [TodoController::class, 'ubahTugas']);
Route::post('/tugas/simpanTugasBaru', [TodoController::class, 'simpanTugas']);
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'verify'])->name('auth.verify');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('admin.dashboard.index');
});
Route::group(['middleware'=>'auth:user'], function(){
    Route::get('/user/home', [UserDashboardController::class, 'index'])->name('user.dashboard.index');
});
Route::post('/tugas/updateKeterangan/{id}', [TugasController::class, 'updateKeterangan'])->name('tugas.updateKeterangan');

//mantap