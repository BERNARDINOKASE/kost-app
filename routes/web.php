<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KosDataController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PemilikHistoryController;
use App\Http\Controllers\PencariController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransaksiSewaController;
use App\Http\Controllers\UserController;
use App\Models\TransaksiSewa;
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
Route::get('/register', [SesiController::class, 'register'])->name('register');
Route::post('/login/request', [SesiController::class, 'login_request'])->name('app.login');
Route::post('/register/request', [SesiController::class, 'register_request'])->name('app.register');

//pencari kos routes
// Route::get('/pencari-kos/login', [PencariController::class, 'formlogin'])->name('pencari.login');
// Route::post('/pencari-kos/login/request', [PencariController::class, 'login'])->name('pencari.login.request');
// Route::get('/pencari-kos/registrasi', [PencariController::class, 'formregistration'])->name('pencari.registration');


Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/kos/{id}', [AppController::class, 'show'])->name('app.show');

Route::get('/dashboard', function () {
    return view('admin.layout.content');
})->middleware(['auth', 'verified', 'UserAkses:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //admin
    Route::resource('/data-user', AdminController::class)->middleware('UserAkses:admin');
    Route::resource('/data-kos', KosDataController::class)->middleware('UserAkses:admin');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout.dashboard');

    //pemilik kos
    Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index')->middleware('UserAkses:pemilik');
    Route::get('/pemilik/akun', [PemilikController::class, 'akunsaya'])->name('pemilik.akunsaya')->middleware('UserAkses:pemilik');
    Route::get('/pemilik/lihat-kos', [PemilikController::class, 'lihatkos'])->name('pemilik.lihatkos')->middleware('UserAkses:pemilik');
    Route::post('/pemilik/ganti-password', [PemilikController::class, 'gantipassword'])->name('pemilik.gantipassword')->middleware('UserAkses:pemilik');
    Route::resource('/pemilik', PemilikController::class)->middleware('UserAkses:pemilik');


    //pencari kos
    Route::get('/kos/{id}/sewa', [AppController::class, 'ajukansewa'])->name('app.ajukansewa')->middleware('UserAkses:pencari');
    Route::get('pencari/history', [AppController::class, 'history_transaksi'])->name('app.historytransaksi')->middleware('UserAkses:pencari');
    // Route::get('/kos/history', [AppController::class, 'historytransaksi'])->name('app.historytransaksi')->middleware('UserAkses:pencari');
    Route::resource('/ajukan-sewa', TransaksiSewaController::class)->middleware('UserAkses:pencari');
});


// Route::get('/user', [UserController::class, 'index'])->name('user.index');

require __DIR__ . '/auth.php';
