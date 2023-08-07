<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KosDataController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PencariController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('app.layout.content');
// });

Route::get('/login', [SesiController::class, 'login'])->name('login');
Route::post('/admin/login/request', [SesiController::class, 'login_request'])->name('admin.login');

//pencari kos routes
// Route::get('/pencari-kos/login', [PencariController::class, 'formlogin'])->name('pencari.login');
// Route::post('/pencari-kos/login/request', [PencariController::class, 'login'])->name('pencari.login.request');
// Route::get('/pencari-kos/registrasi', [PencariController::class, 'formregistration'])->name('pencari.registration');


Route::get('/', [AppController::class, 'index']);
Route::get('/kos/{id}', [AppController::class, 'show'])->name('app.show');
Route::get('/kos/{id}/sewa', [AppController::class, 'ajukansewa'])->name('app.ajukansewa');

Route::get('/dashboard', function () {
    return view('admin.layout.content');
})->middleware(['auth', 'verified', 'UserAkses:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/data-user', AdminController::class)->middleware('UserAkses:admin');
    Route::resource('/data-kos', KosDataController::class)->middleware('UserAkses:admin');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout.dashboard');
    Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
    Route::get('/pemilik/akun', [PemilikController::class, 'akunsaya'])->name('pemilik.akunsaya');
    Route::get('/pemilik/lihat-kos', [PemilikController::class, 'lihatkos'])->name('pemilik.lihatkos');
    Route::post('/pemilik/ganti-password', [PemilikController::class, 'gantipassword'])->name('pemilik.gantipassword');
    Route::resource('/pemilik', PemilikController::class);
});


// Route::get('/user', [UserController::class, 'index'])->name('user.index');

require __DIR__ . '/auth.php';
