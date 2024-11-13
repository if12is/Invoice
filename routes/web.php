<?php

use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


//invoice routes
Route::get('/InvoiceDetails/index', [InvoiceController::class, 'InvoiceDetailsIndex'])->name('InvoiceDetails.index');

Route::post('/InvoiceDetails/store', [InvoiceController::class, 'store'])->name('InvoiceDetails.store');

Route::get('/InvoiceDetailsTable/index', [InvoiceController::class, 'InvoiceDetailsTableIndex'])->name('InvoiceDetailsTable.index');


Route::get('/InvoiceDetails/{id}/edit', [InvoiceController::class, 'edit'])->name('InvoiceDetails.edit');

Route::put('/InvoiceDetails/{id}', [InvoiceController::class, 'update'])->name('InvoiceDetails.update');
Route::delete('/InvoiceDetails/{id}', [InvoiceController::class, 'destroy'])->name('InvoiceDetails.destroy');
