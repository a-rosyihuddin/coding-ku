<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\UserController;
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

Route::middleware(['customer'])->group(function () {
    Route::get('/home', [CustomerController::class, 'home'])->name('cus.home');
    Route::post('/pesan', [OrderController::class, 'pesan'])->name('cus.pesan');
});

//admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [UserController::class, 'adminhome'])->name('admin.home');
    Route::get('/admin/viewmenu', [MenuController::class, 'index'])->name('admin.ViewMenu');
    Route::get('/admin/{menu:id}/edit', [MenuController::class, 'edit'])->name('admin.FormUpdate');
    Route::post('/admin/{menu:id}/edit', [MenuController::class, 'update'])->name('admin.ActionFormUpdate');
    Route::delete('/admin/hapus/{menu:id}', [MenuController::class, 'destroy'])->name('admin.HapusMenu');
    Route::get('/admin/tambah', [MenuController::class, 'create'])->name('admin.TambahMenu');
    Route::post('/admin/tambah', [MenuController::class, 'store'])->name('admin.actionTambahMenu');
    Route::get('/admin/orders', [OrderController::class, 'orders'])->name('admin.OrderMasuk');
    Route::get('/admin/riwayat', [OrderController::class, 'riwayat'])->name('admin.RiwayatOrder');
    Route::get('/admin/detail/{order:id}', [OrderDetailController::class, 'detailOrder'])->name('admin.DetailOrder');
});

Route::middleware(['auth', 'kasir'])->group(function () {
    Route::get('/kasir/dashboard', [UserController::class, 'kasirhome'])->name('kasir.home');
    Route::post('/kasir/cariorder', [OrderController::class, 'cariorder'])->name('kasir.CariOrder');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [UserController::class, 'loginAdmin'])->name('admin.login');
    Route::post('/admin/login', [UserController::class, 'adminAction'])->name('admin.action');
    Route::get('/login', [CustomerController::class, 'login'])->name('cus.login');
    Route::post('/login', [CustomerController::class, 'store'])->name('cus.action');
    Route::get('/', [MenuController::class, 'landingpage'])->name('landing.page');
});

Route::post('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
Route::get('/logout', [CustomerController::class, 'logout'])->name('cus.logout');
