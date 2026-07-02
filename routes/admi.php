<?php
use App\Http\Controllers\ConductoreController;
use Illuminate\Support\Facades\Route;
Route::resource('conductores', ConductoreController::class)->names('admin.conductores');
Route::livewire('/registro-clientes', 'clientes.registro-clientes')->name('admin.registro-clientes');
Route::livewire('/clientes', 'clientes.gestion-clientes')->name('admin.clientes');

