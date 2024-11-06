<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

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

// Rotte pubbliche
Route::get('/', function () {
    return view('welcome');
});

// Rotte autenticazione
Auth::routes(['register' => true]);

// Rotte area admin
Route::middleware(['auth'])
    ->prefix('admin') // prefisso "admin/" per tutte le rotte di questo gruppo
    ->name('admin.') // prefisso "admin." per tutti i nomi delle rotte
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('projects', ProjectController::class);
    });