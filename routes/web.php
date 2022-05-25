<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InventarisController;
use App\Models\berita;
use App\Models\member;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashbroard');

Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::get('/create-member', [MemberController::class, 'create'])-> name('create-member');
Route::post('/simpan-member', [MemberController::class, 'store'])-> name('simpan-member');
Route::get('/edit-member/{id}', [MemberController::class, 'edit'])->name('edit-member');
Route::post('/update-member/{id}', [MemberController::class, 'update'])->name('update-member');
Route::post('/hapus-member/{id}', [MemberController::class, 'destroy'])->name('hapus-member');

Route::get('/berita', [BeritaController::class, 'index'])->name('index');
Route::get('/create-berita', [BeritaController::class, 'create']) ->name('create-berita');
Route::post('/simpan-berita', [BeritaController::class, 'store'])->name('simpan-berita');
Route::get('/show-berita/{id}', [BeritaController::class, 'show'])->name('show-berita');
Route::get('/edit-berita/{id}', [BeritaController::class, 'edit'])->name('edit-berita');
Route::post('update-berita/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::post('/hapus-berita/{id}', [BeritaController::class, 'destroy'])->name('hapus-data');

Route::get('/inventaris', [InventarisController::class, 'index'])->name('index');
Route::get('/create-inventaris', [InventarisController::class, 'create']) ->name('create-inventaris');
Route::post('/simpan-inventaris', [InventarisController::class, 'store'])->name('simpan-inventaris');
Route::get('/show-inventaris/{id}', [InventarisController::class, 'show'])->name('show-inventaris');
Route::get('/edit-inventaris/{id}', [InventarisController::class, 'edit'])->name('edit-inventaris');
Route::post('update-inventaris/{id}', [InventarisController::class, 'update'])->name('update-inventaris');
Route::post('/hapus-inventaris/{id}', [InventarisController::class, 'destroy'])->name('hapus-inventaris');
