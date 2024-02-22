<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DataBarangController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');    

    // Data Barang
    Route::get('/DataBarang',[DataBarangController::class,'index'])-> name('DataBarang');
    Route::get('/DataBarang/create',[DataBarangController::class,'create']);
    Route::post('/DataBarang/store',[DataBarangController::class,'store']);
    Route::get('/DataBarang/{id}/edit',[DataBarangController::class,'edit']);
    Route::put('/DataBarang/{id}',[DataBarangController::class,'update']);
    Route::delete('/DataBarang/{id}',[DataBarangController::class,'delete']);

    // Pengguna
    Route::get('/Pengguna',[PenggunaController::class,'index'])-> name('Pengguna');
    Route::post('/Pengguna/store',[PenggunaController::class,'store']);




});

require __DIR__.'/auth.php';
