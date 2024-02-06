<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPakanController;
use App\Http\Controllers\DataObatController;
use App\Http\Controllers\DataSopirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataPeternakanController;
use App\Http\Controllers\DataArtikelController;
use App\Http\Controllers\ManajemenBibitAyamMasukController;
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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//data-pakan
// Index and Show
Route::get('/data_pakan', [DataPakanController::class, 'index'])->name('data_pakan.index');

// Create and Store
Route::get('/data_pakan/create', [DataPakanController::class, 'create'])->name('data_pakan.create');
Route::post('/data_pakan', [DataPakanController::class, 'store'])->name('data_pakan.store');

// Edit and Update
Route::get('/data_pakan/{id}/edit', [DataPakanController::class, 'edit'])->name('data_pakan.edit');
Route::put('/data_pakan/{id}', [DataPakanController::class, 'update'])->name('data_pakan.update');

// Delete
Route::delete('/data_pakan/{id}', [DataPakanController::class, 'destroy'])->name('data_pakan.destroy');

//data obat
Route::get('/data_obat', [DataObatController::class, 'index'])->name('data_obat.index');
Route::get('/data_obat/create', [DataObatController::class, 'create'])->name('data_obat.create');
Route::post('/data_obat', [DataObatController::class, 'store'])->name('data_obat.store');
Route::get('/data_obat/{id}/edit', [DataObatController::class, 'edit'])->name('data_obat.edit');
Route::put('/data_obat/{id}', [DataObatController::class, 'update'])->name('data_obat.update');
Route::delete('/data_obat/{id}', [DataObatController::class, 'destroy'])->name('data_obat.destroy');

//data sopir 

Route::get('/data_sopir', [DataSopirController::class, 'index'])->name('data_sopir.index');
Route::get('/data_sopir/create', [DataSopirController::class, 'create'])->name('data_sopir.create');
Route::post('/data_sopir', [DataSopirController::class, 'store'])->name('data_sopir.store');
Route::get('/data_sopir/{id}/edit', [DataSopirController::class, 'edit'])->name('data_sopir.edit');
Route::put('/data_sopir/{id}', [DataSopirController::class, 'update'])->name('data_sopir.update');
Route::delete('/data_sopir/{id}', [DataSopirController::class, 'destroy'])->name('data_sopir.destroy');

//user
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//admin
Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admins', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

//data peternakan
Route::get('/data_peternakan', [DataPeternakanController::class, 'index'])->name('data_peternakan.index');
Route::get('/data_peternakan/create', [DataPeternakanController::class, 'create'])->name('data_peternakan.create');
Route::post('/data_peternakan', [DataPeternakanController::class, 'store'])->name('data_peternakan.store');
Route::get('/data_peternakan/{id}/edit', [DataPeternakanController::class, 'edit'])->name('data_peternakan.edit');
Route::put('/data_peternakan/{id}', [DataPeternakanController::class, 'update'])->name('data_peternakan.update');
Route::delete('/data_peternakan/{id}', [DataPeternakanController::class, 'destroy'])->name('data_peternakan.destroy');

//data artikel
Route::get('/dataartikel', [DataArtikelController::class, 'index'])->name('dataartikel.index');
Route::get('/dataartikel/create', [DataArtikelController::class, 'create'])->name('dataartikel.create');
Route::post('/dataartikel', [DataArtikelController::class, 'store'])->name('dataartikel.store');
Route::get('/dataartikel/{id}/edit', [DataArtikelController::class, 'edit'])->name('dataartikel.edit');
Route::put('/dataartikel/{id}', [DataArtikelController::class, 'update'])->name('dataartikel.update');
Route::delete('/dataartikel/{id}', [DataArtikelController::class, 'destroy'])->name('dataartikel.destroy');

//manajemen bibit ayam masuk

Route::get('/manajemenbibitayammasuk', [ManajemenBibitAyamMasukController::class, 'index'])->name('manajemenbibitayammasuk.index');
Route::get('/manajemenbibitayammasuk/create', [ManajemenBibitAyamMasukController::class, 'create'])->name('manajemenbibitayammasuk.create');
Route::post('/manajemenbibitayammasuk', [ManajemenBibitAyamMasukController::class, 'store'])->name('manajemenbibitayammasuk.store');
Route::get('/manajemenbibitayammasuk/{id}/edit', [ManajemenBibitAyamMasukController::class, 'edit'])->name('manajemenbibitayammasuk.edit');
Route::put('/manajemenbibitayammasuk/{id}', [ManajemenBibitAyamMasukController::class, 'update'])->name('manajemenbibitayammasuk.update');
Route::delete('/manajemenbibitayammasuk/{id}', [ManajemenBibitAyamMasukController::class, 'destroy'])->name('manajemenbibitayammasuk.destroy');

use App\Http\Controllers\ManajemenPakanController;

Route::get('/manajemenpakan', [ManajemenPakanController::class, 'index'])->name('manajemenpakan.index');
Route::get('/manajemenpakan/create', [ManajemenPakanController::class, 'create'])->name('manajemenpakan.create');
Route::post('/manajemenpakan', [ManajemenPakanController::class, 'store'])->name('manajemenpakan.store');
Route::get('/manajemenpakan/{id}/edit', [ManajemenPakanController::class, 'edit'])->name('manajemenpakan.edit');
Route::put('/manajemenpakan/{id}', [ManajemenPakanController::class, 'update'])->name('manajemenpakan.update');
Route::delete('/manajemenpakan/{id}', [ManajemenPakanController::class, 'destroy'])->name('manajemenpakan.destroy');

use App\Http\Controllers\ManajemenObatController;

Route::get('/manajemenobat', [ManajemenObatController::class, 'index'])->name('manajemenobat.index');
Route::get('/manajemenobat/create', [ManajemenObatController::class, 'create'])->name('manajemenobat.create');
Route::post('/manajemenobat', [ManajemenObatController::class, 'store'])->name('manajemenobat.store');
Route::get('/manajemenobat/{id}/edit', [ManajemenObatController::class, 'edit'])->name('manajemenobat.edit');
Route::put('/manajemenobat/{id}', [ManajemenObatController::class, 'update'])->name('manajemenobat.update');
Route::delete('/manajemenobat/{id}', [ManajemenObatController::class, 'destroy'])->name('manajemenobat.destroy');

use App\Http\Controllers\PerkembanganController;

Route::get('/perkembangan', [PerkembanganController::class, 'index'])->name('perkembangan.index');

use App\Http\Controllers\HasilPanenController;

Route::get('/hasilpanen', [HasilPanenController::class, 'index'])->name('hasilpanen.index');
