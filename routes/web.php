<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/test', function () {
    return view('pages-blank');
});
Route::get('/admin/dashboard',[DashboardController::class,'dashboard_admin'])->name('dashboard.admin');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');

Route::get('/admin/buku',[BukuController::class,'index'])->name('dashboard.admin.buku');

Route::get('/admin/tambahbuku',[BukuController::class,'tambah'])->name('dashboard.admin.buku.tambahbuku');
Route::post('/admin/tambahbuku',[BukuController::class,'store'])->name('dashboard.admin.buku.storebuku');
Route::delete('/admin/{buku}',[BukuController::class,'destroy'])->name('dashboard.admin.buku.destroybuku');
Route::get('/admin/{buku}/edit',[BukuController::class,'edit'])->name('dashboard.admin.buku.editbuku');
Route::put('/admin/{buku}',[BukuController::class,'update'])->name('dashboard.admin.buku.updatebuku');