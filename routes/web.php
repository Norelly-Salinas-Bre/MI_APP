<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ExportController;


Route::get('/', function () {
    return redirect()->route('login');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rutas resource para lawyers (incluye store, destroy, edit, update, etc.)
Route::resource('lawyers', LawyerController::class);


// Ruta personalizada para actualizar el avatar del usuario
Route::middleware('auth')->group(function() {
// Agregar esta línea en routes/web.php
Route::put('/profile/avatar', [App\Http\Controllers\ProfileController::class, 'updateAvatar'])->name('profile.avatar.update');
});

Route::post('/lawyers', [App\Http\Controllers\LawyerController::class, 'store'])->name('lawyers.store');

Route::delete('/lawyers/{lawyer}', [LawyerController::class, 'destroy'])->name('lawyers.destroy');
Route::get('/lawyers/{lawyer}/edit', [LawyerController::class, 'edit'])->name('lawyers.edit');
Route::put('/lawyers/{lawyer}', [LawyerController::class, 'update'])->name('lawyers.update');
Route::get('/exportar-usuarios', [ExportController::class, 'exportUsers'])->name('exportar.usuarios');

