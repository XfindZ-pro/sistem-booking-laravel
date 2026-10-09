<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return redirect()->route('bookings.index');
});

Route::prefix('bookings')->name('bookings.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/{booking}/edit', [BookingController::class, 'edit'])->name('edit');     // <-- Route Form Edit
    Route::put('/{booking}', [BookingController::class, 'update'])->name('update');      // <-- Route Simpan Edit
    Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
});