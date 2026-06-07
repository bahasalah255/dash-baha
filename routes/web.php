<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('clients', [ClientController::class, 'index'])->name('clients');
Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('add', function (){
    return view('client-form');
})->name('add');
Route::post('store' , [ClientController::class , 'store'])->name('client.store');
Route::delete('/clients/delete/{client}', [ClientController::class, 'delete'])->name('delete');
Route::get('/modifier/{client}', [ClientController::class, 'edit'])->name('edit');
Route::put('/modifier/{client}',  [ClientController::class, 'update'])->name('clients.update');
Route::get('/dashboard', [DashboardController::class, 'count'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
