<?php

use App\Http\Controllers\ApplyController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PokeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfilController;
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

Route::get('/login', [LoginController::class, 'login'])
    ->name('home.login');

Route::get('/register', [LoginController::class, 'register'])
    ->name('home.register');

Route::get('/biodata', [LoginController::class, 'biodata'])
    ->name('home.biodata');

//Route::get('/', [ProfilController::class, 'index'])
//    ->name('profil.index');

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

Route::get('/search',[SearchController::class,'index'])
    ->name('cari.index');

Route::get('/detail',[DetailController::class,'index'])
    ->name('detail.index');

Route::get('/search/{keyword}', [SearchController::class, 'search']);

Route::get('/detail/{idLowongan}', [DetailController::class, 'detail']);

Route::get('/apply/{idLowongan}', [ApplyController::class, 'apply']);

Route::get('/apply', [ApplyController::class, 'index']);

Route::post('/register/new', [UserController::class, 'store'])
    ->name('user.store');

Route::post('/biodata/new', [BiodataController::class, 'store'])
    ->name('biodata.store');

Route::post('/login/auth', [UserController::class, 'auth'])
    ->name('user.auth');

Route::get('/logout', [UserController::class, 'logout'])
    ->name('user.logout');

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');

Route::get('/profil/biodata', [ProfilController::class, 'biodata'])
    ->name('profil.biodata');

Route::post('/profil/biodata/update', [ProfilController::class, 'updateBiodata'])
    ->name('profil.updateBiodata');

Route::post('/profil/store-pekerjaan', [ProfilController::class, 'storeRiwayatPekerjaan'])
    ->name('profil.storeRiwayatPekerjaan');

Route::post('/profil/riwayat-pendidikan/new', [ProfilController::class, 'storeRiwayatPendidikan'])
    ->name('profil.storeRiwayatPendidikan');

Route::get('/profil/riwayat-pekerjaan', [ProfilController::class, 'riwayatPekerjaan'])
    ->name('profil.riwayatPekerjaan');

Route::get('/profil/riwayat-pendidikan', [ProfilController::class, 'riwayatPendidikan'])
    ->name('profil.riweayatPendidikan');



