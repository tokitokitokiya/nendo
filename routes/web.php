<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplController;
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



Route::post('/apls/check', [AplController::class, 'check'])->name('check');

Route::get('/', [AplController::class, 'index'])->name('index')->middleware('auth');

Route::get('/index', [AplController::class, 'index'])->name('index');

Route::get('/apls/mypage', [AplController::class, 'mypage'])->name('mypage');

Route::post('/orders', [AplController::class, 'chumon'])->name('chumon');

Route::get('/apls/items', [AplController::class, 'items'])->name('items');

Route::delete('/order/{order}', [AplController::class,'delete'])->name('delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
