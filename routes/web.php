<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewAppController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/app')->group(function () {
    Route::get('/venta', [ViewAppController::class, 'venta']);
});


Route::get('auth/google/callback', );