<?php

use App\Livewire\Post\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConductoreController;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('admin', 'admin.admin')->name('admin');
    Route::livewire('/clientes', 'clientes.gestion-clientes')->name('admin.clientes');
    Route::resource('conductores', ConductoreController::class)->names('admin.conductores');

});

require __DIR__.'/settings.php';
