<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\{UserController, PenggunaController, LembagaController, ListKartuController};

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
})->middleware('guest');


// Login
Route::get('/login', function () {
    return view('login.login');
})->middleware('guest')->name('login');


// Dashboard
Route::get('/user', [UserController::class, 'home'])->name('home')->middleware('user');


// My Card
Route::get('user/pengguna', [PenggunaController::class, 'index'])->name('index')->middleware('user');
Route::post('user/pengguna/data', [PenggunaController::class, 'data'])->middleware('user');

Route::get('user/pengguna-add', [PenggunaController::class, 'tambah'])->name('tambah')->middleware('user');
Route::post('user/insert', [PenggunaController::class, 'insert'])->name('insert')->middleware('user');

Route::get('user/pengguna/{id}/edit',[PenggunaController::class, 'edit'])->name('edit')->middleware('user');
Route::post('user/update/{id}',[PenggunaController::class, 'update'])->name('update')->middleware('user');

Route::post('user/pengguna/hapus',[PenggunaController::class, 'delete'])->middleware('user');

Route::get('user/pengguna/{id}/show',[PenggunaController::class, 'show'])->name('show')->middleware('user');

Route::get('user/pengguna/{id}/print',[PenggunaController::class, 'print'])->name('print')->middleware('user');

Route::get('template/{id}', [PenggunaController::class, 'template']);


// My Company
Route::get('user/lembaga', [LembagaController::class, 'lembaga'])->name('lembaga')->middleware('user');

Route::post('user/lembaga-action', [LembagaController::class, 'lembaga_action'])->name('lembaga_action')->middleware('user');

// Route::post('user/lembaga-insert', [LembagaController::class, 'lembaga_insert'])->name('lembaga_insert')->middleware('user');

// Route::post('user/lembaga-update', [LembagaController::class, 'lembaga_update'])->name('lembaga_update')->middleware('user');


// My List Card 
Route::get('user/list-kartu', [ListKartuController::class, 'list_kartu'])->name('list_kartu')->middleware('user');