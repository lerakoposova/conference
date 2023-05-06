<?php

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

Route::get('/', function () {
    return view('main');
});

Route::get('/dashboard', [UserController::class, 'getDashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/edit/{user}', [UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');
Route::patch('/update/{user}', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('update');
Route::delete('/delete/{user}', [UserController::class, 'delete'])->middleware(['auth', 'verified'])->name('delete');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
