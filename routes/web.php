<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ClientController;
use Illuminate\Cache\Console\ClearCommand;

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

Route::get('/clients/create', [ClientController::class, 'create']);

Route::get('/bills/create', [BillController::class, 'create']);

Route::post('/clients/store',[ClientController::class, 'store']);

Route::post('/bills/store',[BillController::class, 'store']);

Route::get('/clients/show/{client}', [ClientController::class, 'show']);

Route::get('/clients/name/{name}', [ClientController::class, 'name']);

Route::get('/clients/search/{text}', [ClientController::class, 'busca']);

Route::get('/clients/bills/{id}', [BillController::class, 'contas']);

Route::get('/bills/expensive/{value}', [BillController::class, 'caras']);

Route::get('/bills/between/{value1}/{value2}', [BillController::class, 'between']);

Route::get('/clients/order', [ClientController::class, 'order']);

