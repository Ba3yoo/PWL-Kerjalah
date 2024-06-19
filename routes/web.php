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
use App\Http\Middleware\LoginMid;
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

Route::controller(SearchController::class)->group(function(){
    Route::get('/search', 'index')->name('cari.index');
    Route::get('/search/{keyword}', 'search');
});

Route::get('/detail/{idLowongan}', [DetailController::class, 'detail']);

Route::controller(ApplyController::class)->group(function(){
    Route::get('/apply/{idLowongan}', 'apply');
    Route::get('/apply', 'index');
    Route::post('/apply/store-application', 'storeAppli');
})->middleware('login.mid');

// Route::get('/apply/{idLowongan}', [ApplyController::class, 'apply']);

// Route::get('/apply', [ApplyController::class, 'index']);

// Route::post('/apply/store-application', [ApplyController::class, 'storeAppli']);

Route::post('/register/new', [UserController::class, 'store'])
    ->name('user.store');

Route::post('/biodata/new', [BiodataController::class, 'store'])
    ->name('biodata.store');

Route::post('/login/auth', [UserController::class, 'auth'])
    ->name('user.auth');

Route::get('/logout', [UserController::class, 'logout'])
    ->name('user.logout');

Route::controller(ProfilController::class)->prefix('/profil')->group(function () {
    Route::get('/', 'index')->name('profil.index');
    Route::controller(ProfilController::class)->prefix('/biodata')->group(function () {
        Route::get('/', 'biodata')->name('profil.biodata');
        Route::post('/update', 'updateBiodata')->name('profil.update');
    });
    Route::controller(ProfilController::class)->prefix('/riwayat-pendidikan')->group(function () {
        Route::get('/', 'riwayatPendidikan')->name('profil.riwayat-pendidikan');
        Route::post('/new', 'storeRiwayatPendidikan')->name('profil.store-pendidikan');
    });
    Route::post('/store-pekerjaan', 'storeRiwayatPekerjaan')->name('profil.store-pekerjaan');
    Route::get('/riwayat-pekerjaan', 'riwayatPekerjaan')->name('profil.riwayat-pekerjaan');
})->middleware('login.mid');


Route::get('/artikel', [HomeController::class, 'artikel'])
    ->name('home.artikel');

Route::get('/faq', [HomeController::class, 'faq'])
    ->name('home.faq');
