<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

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

Route::prefix('resource')->group(function () {
    
    Route::post('/document',[ResourceController::class, 'saleDocument']);
    Route::post('/payment_method',[ResourceController::class, 'paymentMethod']);
    Route::post('/client',[ResourceController::class, 'client']);
    Route::post('/product',[ResourceController::class, 'product']);
});

