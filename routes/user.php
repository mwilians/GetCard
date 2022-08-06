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
 })->middleware('guest')->name('login');//->name('login');

// Dashboard

Route::get('/user', [UserController::class, 'home'])->name('home')->middleware('auth');


// My Card
Route::get('user/pengguna', [PenggunaController::class, 'index'])->name('index')->middleware('auth');
Route::post('user/pengguna/data', [PenggunaController::class, 'data'])->middleware('auth');

Route::get('user/pengguna-add', [PenggunaController::class, 'tambah'])->name('tambah')->middleware('auth');
Route::post('user/insert', [PenggunaController::class, 'insert'])->name('insert')->middleware('auth');

Route::get('user/pengguna/{id}/edit',[PenggunaController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('user/update/{id}',[PenggunaController::class, 'update'])->name('update')->middleware('auth');

Route::post('user/pengguna/hapus',[PenggunaController::class, 'delete'])->middleware('auth');

Route::get('user/pengguna/{id}/show',[PenggunaController::class, 'show'])->name('show')->middleware('auth');


// My Company

Route::get('user/lembaga', [LembagaController::class, 'lembaga'])->name('lembaga')->middleware('auth');

Route::get('user/lembaga', [LembagaController::class, 'lembaga_tambah'])->name('lembaga_tambah')->middleware('auth');
Route::post('user/lembaga-insert', [LembagaController::class, 'lembaga_insert'])->name('lembaga_insert')->middleware('auth');

// Route::get('user/lembaga', [LembagaController::class, 'lembaga_edit'])->name('lembaga_edit');
// Route::post('user/lembaga-update', [LembagaController::class, 'lembaga_update'])->name('lembaga_update');

// My List Card 

Route::get('user/list-kartu', function () {
    return view('user.list-kartu');
});

// Route::get('user/list-kartu', [ListKartuController::class, 'list_kartu'])->name('list_kartu');