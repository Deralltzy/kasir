<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('content');
});


Route::get('/barang', [HomeController::class, 'index'])->name('index');

Route::get('/create', [BarangController::class, 'create'])->name('barang.create');

Route::post('/store', [BarangController::class, 'store'])->name('barang.store');

Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');

Route::resource('barang.index',BarangController::class );




