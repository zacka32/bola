<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
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

//masuk ke admin


Route::get('/dashboard', function () {
    return view('website.backend.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';