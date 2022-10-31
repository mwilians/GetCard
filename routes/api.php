<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\User\{HistoriController, PaymentController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/payment-handler', [ApiController::class, 'payment_handler']);

Route::post('user/histori-pembayaran/dataHistori', [HistoriController::class, 'dataHistori']);

Route::post('user/snap', [PaymentController::class, 'snap']);
