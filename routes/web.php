<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Services\JikanService;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeSearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/anime/search', [AnimeSearchController::class, 'index'])->name('anime.search');
    Route::post('/anime/search/results', [AnimeSearchController::class, 'search'])->name('anime.search.results');

    Route::get('/anime/{id}', [AnimeController::class, 'show'])->name('anime.show');



});

require __DIR__.'/auth.php';





