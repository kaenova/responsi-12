<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;

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

// View
Route::get("/", [UIController::class, 'dashboard']);
Route::get("/login", [UIController::class, 'login']);
Route::get("/register", [UIController::class, 'register']);
Route::get("/logout", [UIController::class, 'logout']);
Route::get("/barang", [UIController::class, 'barang']);
Route::get("/toko", [UIController::class, 'toko']);
Route::get("/barang_toko", [UIController::class, 'barang_toko']);

// Disimpan dalam file app/Http/Controllers/AkunController.php
Route::get('/akun/register', [AkunController::class, 'register']);
// // Langsung
// Route::get('/akun/register', function () {
//   $username = "kaenova laravel 2";
//   $password = "keren banget";

//   $akun = new Akun();
//   $akun->username = $username;
//   $akun->password = $password;
//   $akun->save();
//   ddd($akun);
// });

Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/buat_toko', [AdminController::class, 'buat_toko']);
Route::get('/admin/buat_barang', [AdminController::class, 'buat_barang']);
Route::get('/admin/sematkan_barang_toko', [AdminController::class, 'sematkan_barang_toko']);