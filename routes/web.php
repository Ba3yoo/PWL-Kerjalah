<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PokeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::controller(UserController::class)->group(function () {
    Route::get('/user/{name}', 'index');
    Route::get('/user', function() {
        $name = $_GET['name'] ?? 'Default';
        $userC = new UserController;
        $userC->index($name);
    });
    Route::delete('/user/{name}', 'delete');
});

Route::controller(PokeController::class)->prefix('/poke')->group(function () {
    Route::get('/}', 'index');
    Route::get('/formatted', 'formatted');
});

Route::get('/poke', [PokeController::class, 'index'])
    ->name('poke.index');

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard.index');
