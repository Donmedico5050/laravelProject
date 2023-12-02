<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\planController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\marketdataController;
use App\Http\Controllers\contactController;



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

Route::get('/plan', [planController::class, 'planfunction'])->name('plan');
Route::get('/about', [aboutController::class, 'aboutfunction'])->name('about');
Route::get('/marketdata', [marketdataController::class, 'marketfunction'])->name('marketdata');
Route::get('/contact', [contactController::class, 'contactfunction'])->name('contact');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
