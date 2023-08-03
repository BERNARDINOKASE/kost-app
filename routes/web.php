<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KosDataController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [AppController::class, 'index']);
Route::get('/kos/{id}', [AppController::class, 'show'])->name('app.show');

Route::get('/dashboard', function () {
    return view('admin.layout.content');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/data-user', AdminController::class);
    Route::resource('/data-kos', KosDataController::class);
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout.dashboard');
    Route::get('/pemilik', [PemilikController::class, 'index'])->name('pemilik.index');
    Route::get('/pemilik/akun', [PemilikController::class, 'akunsaya'])->name('pemilik.akunsaya');
    Route::get('/pemilik/lihat-kos', [PemilikController::class, 'lihatkos'])->name('pemilik.lihatkos');
    Route::post('/pemilik/ganti-password', [PemilikController::class, 'gantipassword'])->name('pemilik.gantipassword');
    Route::resource('/pemilik', PemilikController::class);
});


// Route::get('/user', [UserController::class, 'index'])->name('user.index');

require __DIR__ . '/auth.php';
