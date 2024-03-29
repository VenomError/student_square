<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'index']);
Route::get('/daftarUser', [AdminController::class, 'user']);
Route::get('/daftarAdmin', [AdminController::class, 'admin']);

Route::get('/mahasiswa', [AdminController::class, 'mahasiswa']);
