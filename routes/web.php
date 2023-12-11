<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\ReservationController;

Route::get('/admin', function () {
    return view('admin.principal');
})->middleware('checkUserClass:admin');

Route::get('/operacional', function () {
    return view('operacional.principal');
})->middleware('checkUserClass:operacional');

Route::get('/comercial', function () {
    return view('comercial.principal');
})->middleware('checkUserClass:comercial');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cardapio', CardapioController::class);

Route::resource('availability', AvailabilityController::class);

Route::post('reservas/{reservation}/changeStatus', [ReservationController::class, 'changeStatus'])->name('reservas.changeStatus');
Route::resource('reservas', ReservationController::class)->except(['update']);
Route::put('reservas/{reserva}', [ReservationController::class, 'update'])->name('reservas.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
