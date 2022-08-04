<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\{UserController, PenggunaController, LembagaController};

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

// Laravel
Route::get('/welcome', function () {
    return view('welcome');
});

// Login

Route::get('/login', function () {
    return view('login.login');
});

// Dashboard

Route::get('/user', [UserController::class, 'home'])->name('home')->middleware('auth');


// My Card
Route::get('user/pengguna', [PenggunaController::class, 'index'])->name('index');
Route::post('user/pengguna/data', [PenggunaController::class, 'data']);

Route::get('user/pengguna-add', [PenggunaController::class, 'tambah'])->name('tambah');
Route::post('user/insert', [PenggunaController::class, 'insert'])->name('insert');

Route::get('user/pengguna/{id}/edit',[PenggunaController::class, 'edit'])->name('edit');
Route::post('user/update/{id}',[PenggunaController::class, 'update'])->name('update');

Route::post('user/pengguna/hapus',[PenggunaController::class, 'delete']);

Route::get('user/pengguna/{id}/show',[PenggunaController::class, 'show'])->name('show');


// My Company

Route::get('user/lembaga', [LembagaController::class, 'lembaga'])->name('lembaga');

Route::get('user/lembaga', [LembagaController::class, 'lembaga_tambah'])->name('lembaga_tambah');
Route::post('user/lembaga-insert', [LembagaController::class, 'lembaga_insert'])->name('lembaga_insert');

// Route::get('user/lembaga', [LembagaController::class, 'lembaga_edit'])->name('lembaga_edit');
// Route::post('user/lembaga-update', [LembagaController::class, 'lembaga_update'])->name('lembaga_update');

// My List Card 

Route::get('user/list-kartu', function () {
    return view('user.list-kartu');
});

// Route::get('user/list-kartu', [ListKartuController::class, 'list_kartu'])->name('list_kartu');