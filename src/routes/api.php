<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;

Route::prefix('proyeks')->middleware('apikey')->group(function () {
    Route::get('/', [ProyekController::class, 'index']);
    Route::get('{id}', [ProyekController::class, 'show']);
    Route::post('/', [ProyekController::class, 'store']);
    Route::put('{id}', [ProyekController::class, 'update']);
    Route::delete('{id}', [ProyekController::class, 'destroy']);
    Route::post('/decrypt', [ProyekController::class, 'decrypt']);
});
Route::get('/login', function () {
    return redirect('/admin/login'); // atau sesuaikan jika pakai Filament
})->name('login');