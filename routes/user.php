<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\{UserController, PenggunaController, LembagaController, ListKartuController, PaymentController};

use Illuminate\Support\Facades\Auth;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', fn () => phpinfo());

// Laravel
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('guest');


Route::get('/card', function(){
    return view("user/print");
});


// Login
Route::get('/login', function () {
    return view('login.login');
})->middleware('guest')->name('login');


// Dashboard
Route::get('/user', [UserController::class, 'home'])->name('home')->middleware('user');


// My Card - Data
Route::get('user/pengguna', [PenggunaController::class, 'index'])->name('index')->middleware('user');
Route::post('user/pengguna/data', [PenggunaController::class, 'data'])->middleware('user');

Route::get('user/pengguna-add', [PenggunaController::class, 'tambah'])->name('tambah')->middleware('user');
Route::post('user/insert', [PenggunaController::class, 'insert'])->name('insert')->middleware('user');

Route::post('user/import/pengguna', [PenggunaController::class, 'import'])->name('import')->middleware('user');

Route::get('user/pengguna/{id}/edit',[PenggunaController::class, 'edit'])->name('edit')->middleware('user');
Route::post('user/update/{id}',[PenggunaController::class, 'update'])->name('update')->middleware('user');

Route::post('user/pengguna/hapus',[PenggunaController::class, 'delete'])->middleware('user');

// My Card - Show

Route::get('user/pengguna/{id}/show',[PenggunaController::class, 'show'])->name('show')->middleware('user');

Route::post('user/pengguna/{id}/simpan-template',[PenggunaController::class, 'simpan'])->name('simpan')->middleware('user');

// My Card - Fitur

Route::get('user/pengguna/{id}/print',[PenggunaController::class, 'print'])->name('print')->middleware('user');

Route::get('getcard.kartusaya/{id}/{no_id}', [PenggunaController::class, 'viewLink'])->name('viewLink')->middleware('user');

Route::get('getcard.kartusaya.depan/{id}', [PenggunaController::class, 'viewPreviewD'])->name('viewPreviewD')->middleware('user');

Route::get('getcard.kartusaya.belakang/{id}', [PenggunaController::class, 'viewPreviewB'])->name('viewPreviewB')->middleware('user');

Route::get('template/{id}', [PenggunaController::class, 'template']);


// My Company
Route::get('user/lembaga', [LembagaController::class, 'lembaga'])->name('lembaga')->middleware('user');

Route::post('user/lembaga-action', [LembagaController::class, 'lembaga_action'])->name('lembaga_action')->middleware('user');


// My List Card 
Route::get('user/list-kartu', [ListKartuController::class, 'list_kartu'])->name('list_kartu')->middleware('user');

Route::post('user/list-kartu/simpan-kartu', [ListKartuController::class, 'simpan_kartu'])->name('simpan_kartu')->middleware('user');

Route::post('user/deleteKartu/{id}', [ListKartuController::class, 'deleteKartu'])->name('deleteKartu')->middleware('user');


// Premium
Route::get('user/premium', [PaymentController::class, 'premium'])->name('premium')->middleware('user');

Route::post('user/premium', [PaymentController::class, 'premium_post']);

Route::get('user/premium/pembayaran', [PaymentController::class, 'payment'])->name('payment')->middleware('user');