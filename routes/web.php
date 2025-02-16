<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataBarangController;
use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\DB;

Route::get('/', [loginController::class, 'viewLogin'])->name('login');
Route::post('/', [loginController::class, 'actionLogin'])->name('actionLogin');
Route::get('/actionLogout', [loginController::class, 'actionLogout'])->name('actionLogout');
Route::get('/dashboard', [dashboardController::class, 'Dashboard'])->name('dashboard')->middleware('auth');

Route::get('/data_barang', [dataBarangController::class, 'read'])->name('dataBarang')->middleware('auth');
Route::get('/data_barang/edit/{id}', [dataBarangController::class, 'EditBarang'])->name('editBarang')->middleware('auth');
Route::post('/data_barang/edit/{id}', [dataBarangController::class, 'ActionEditBarang'])->name('editBarang')->middleware('auth');
Route::post('/data_barang/add', [dataBarangController::class, 'AddBarang'])->name('addBarang')->middleware('auth');
Route::delete('/data_barang/add', [dataBarangController::class, 'AddBarang'])->name('addBarang')->middleware('auth');

Route::delete('/data_barang/{id}', [dataBarangController::class, 'hapusBarang'])->name('hapusBarang')->middleware('auth');


Route::get('/barang_masuk', [dataBarangController::class, 'viewBarangMasuk'])->name('viewBarangMasuk')->middleware('auth');
Route::post('/barang_masuk', [dataBarangController::class, 'addBarangMasuk'])->name('addBarangMasuk')->middleware('auth');
Route::delete('/barang_masuk/{id}', [dataBarangController::class, 'deleteBarangMasuk'])->name('deleteBarangMasuk')->middleware('auth');
// Route::get('/barang_masuk/edit/{id}', [dataBarangController::class, 'formAddBarangMasuk'])->name('viewAddBarangMasuk')->middleware('auth');
Route::post('/barang_masuk/edit/{id}', [dataBarangController::class, 'editBarangMasuk'])->name('editBarangMasuk')->middleware('auth');
Route::get('/barang_keluar', [dataBarangController::class,'viewBarangkeluar'])->name('viewBarangKeluar')->middleware('auth');
Route::post('/barang_keluar', [dataBarangController::class,'addBarangkeluar'])->name('addBarangKeluar')->middleware('auth');
// Route::get('/barang_keluar/edit/{id}', [dataBarangController::class,'viewEditBarangkeluar'])->name('viewEditBarangKeluar')->middleware('auth');
Route::post('/barang_keluar/edit/{id}', [dataBarangController::class,'EditBarangkeluar'])->name('EditBarangKeluar')->middleware('auth');
Route::delete('/barang_keluar/{id}', [dataBarangController::class, 'deleteBarangKeluar'])->name('deleteBarangKeluar')->middleware('auth');
Route::get('/user', [userController::class,'viewUser'])->name('viewUser')->middleware('auth');
Route::post('/user', [userController::class,'addUser'])->name('addUser')->middleware('auth');
Route::delete('/user/{id}', [userController::class,'deleteUserKeluar'])->name('deleteUser')->middleware('auth');
Route::get('/user/profil/{id}', [userController::class,'viewProfilUser'])->name('viewUser')->middleware('auth');
// Route::get('/user/edit/{id}', [userController::class,'viewEditProfilUser'])->name('viewEditUser');
Route::post('/user/edit/{id}', [userController::class,'EditProfilUser'])->name('EditUser')->middleware('auth');
Route::get('/profil', [userController::class,'profilView'])->name('profilView')->middleware('auth');
Route::get('/barang_keluar/print/{id}', [dataBarangController::class,'printBarangKeluar'])->name('printBarangKeluar')->middleware('auth');
Route::get('/barang_keluar/export', [dataBarangController::class,'exportBarangKeluar'])->name('exportBarangKeluar')->middleware('auth');
Route::get('/barang_masuk/print/{id}', [dataBarangController::class,'printBarangMasuk'])->name('printBarangMasuk')->middleware('auth');
Route::get('/barang_masuk/export', [dataBarangController::class,'exportBarangMasuk'])->name('exportBarangMasuk')->middleware('auth');
