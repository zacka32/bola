<?php

use App\Http\Controllers\Controller;
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


Route::get('/', [Controller::class,'index'])->name('home');
// Route::get('/home', [Controller::class,'home'])->name('home');
// Route::get('/tahfidz', [Controller::class,'tahfidz'])->name('tahfidz');
// Route::get('/tahsin', [Controller::class,'tahsin'])->name('tahsin');
// Route::get('/tasmi', [Controller::class,'tasmi'])->name('tasmi');
// Route::get('/visimisi', [Controller::class,'visimisi'])->name('visimisi');
// Route::get('/profile', [Controller::class,'profile'])->name('profile');
// Route::get('/kontak', [Controller::class,'kontak'])->name('kontak');
