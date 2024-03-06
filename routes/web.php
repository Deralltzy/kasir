<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Models\Pengguna;
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



Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/update', [BarangController::class, 'update'])->name('barang.update');
Route::get('/destroy/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('/barang/index', [BarangController::class, 'index'])->name('barang.index');
//Route::resource('barang/index',BarangController::class );

//Route::resource('/user/index', PenggunaController::class);
Route::get('/user/index', [PenggunaController::class, 'index'])->name('user.index');
Route::get('/create', [PenggunaController::class, 'create'])->name('user.create');


