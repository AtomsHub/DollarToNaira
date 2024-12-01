<?php

use App\Http\Controllers\CurrencyController;

use App\Http\Controllers\echangeController;
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



Route::get('/', [CurrencyController::class, 'MAININDEX'])->name('index');



// Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');

// // Route definition for updating a currency
// Route::put('/dashboard/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');


Route::get('/api/exchange-rate/{currency}', [CurrencyController::class, 'getRate'])->name('api.exchangeRate');
Route::prefix('dashboard')->group(function () {
    Route::get('/currencies', [CurrencyController::class, 'index'])->name('currencies.index');
    Route::post('/currencies', [CurrencyController::class, 'store'])->name('currencies.store');
    Route::get('/currencies/{id}/edit', [CurrencyController::class, 'edit'])->name('currencies.edit');
    Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');
    Route::delete('/currencies/{id}', [CurrencyController::class, 'destroy'])->name('currencies.destroy');

    Route::get('exchange-rates', [echangeController::class, 'index'])->name('exchange-rates.index');
    Route::post('exchange-rates', [echangeController::class, 'store'])->name('exchange-rates.store');

    Route::put('exchange-rates/{id}', [echangeController::class, 'update'])->name('exchange-rates.update');

    // Route::put('exchange-rates/update', [echangeController::class, 'update'])->name('exchange-rates.update');
    Route::get('exchange-rates/delete/{id}', [echangeController::class, 'destroy'])->name('exchange-rates.delete');



});
