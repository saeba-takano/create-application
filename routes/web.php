<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlcoholController;
use App\Http\Controllers\FlontController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KindController;
use App\Http\Controllers\CountryController;

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

Route::get('/',[FlontController::class,'flont'])->name('flont');

Route::get('/posts/add_alcohol',[AlcoholController::class,'add_alcohol'])->middleware(['auth'])->name('add_alcohol');
Route::get('/posts/add_comment',[PostController::class,'add_comment'])->middleware(['auth'])->name('add_alcohol');
Route::post('/posts/add_alcohol',[AlcoholController::class,'store'])->name('store');
Route::post('/posts/add_comment',[PostController::class,'store'])->name('store');
Route::get('/posts/{post}',[PostController::class,'show'])->name('show');

Route::get('/posts/{post}/edit',[PostController::class,'edit']);

Route::get('/alcohol', [AlcoholController::class, 'alcohol'])->name('alcohol');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
