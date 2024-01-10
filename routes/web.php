<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CircuitsController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/bookings', function () {
    return view('bookings');
})->middleware(['auth', 'verified'])->name('bookings');

Route::get('/circuits', function () {
    return view('circuits');
})->middleware(['auth', 'verified'])->name('circuits');
Route::post('addCircuit', [CircuitsController::class, 'add'])->name('addCircuit.post');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
