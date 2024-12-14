<?php

use App\Http\Controllers\BlogController;

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ExchangeController;
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

Route::get('/blogs', [BlogController::class, 'showBlogs'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'showBlogPost'])->name('blogs.show');

Route::get('/{amount}-usd-to-ngn', [CurrencyController::class, 'convert'])->name('usd.to.ngn');



// Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');

// // Route definition for updating a currency
// Route::put('/dashboard/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');

Route::get('/api/exchange-rate/{from}/{to}', [CurrencyController::class, 'getRate']);

Route::get('/{from}-NGN-{amount}', [CurrencyController::class, 'zzconvert'])->name('currency.convert');


// Route::get('/api/exchange-rate/{currency}', [CurrencyController::class, 'getRate'])->name('api.exchangeRate');
Route::prefix('dashboard')->group(function () {
    Route::get('/', [CurrencyController::class, 'dashboardindex'])->name('dashboardindex.index');

    Route::get('/currencies', [CurrencyController::class, 'index'])->name('currencies.index');
    Route::post('/currencies', [CurrencyController::class, 'store'])->name('currencies.store');
    Route::get('/currencies/{id}/edit', [CurrencyController::class, 'edit'])->name('currencies.edit');
    // Route::put('/currencies/{id}', [CurrencyController::class, 'update'])->name('currencies.update');
    Route::post('/currencies/update', [CurrencyController::class, 'update'])->name('currencies.update');

    Route::delete('/currencies/{id}', [CurrencyController::class, 'destroy'])->name('currencies.destroy');

    Route::get('exchange-rates', [ExchangeController::class, 'index'])->name('exchange-rates.index');
    Route::post('exchange-rates', [ExchangeController::class, 'store'])->name('exchange-rates.store');
    Route::post('/exchange/update', [ExchangeController::class, 'update'])->name('exchange-rates.update');

    // Route::put('exchange-rates/{id}', [ExchangeController::class, 'update'])->name();

    // Route::put('exchange-rates/update', [ExchangeController::class, 'update'])->name('exchange-rates.update');
    Route::get('exchange-rates/delete/{id}', [ExchangeController::class, 'destroy'])->name('exchange-rates.delete');



});
