<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ControllerPublicador;
use App\Http\Livewire\ControllerGrupo;
use App\Http\Livewire\ControllerTerritorio;
use App\Http\Livewire\ControllerDashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin', ControllerDashboard::class)->name('admin');
Route::get('/publicador', ControllerPublicador::class)->name('publicador');
Route::get('/grupo', ControllerGrupo::class)->name('grupo');
Route::get('/territorio', ControllerTerritorio::class)->name('territorio');