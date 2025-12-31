<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/dashboard', [ProfileController::class,'edit'])
    ->name('dashboard')
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('hero', [HeroController::class, 'create'])
        ->name('hero.create');

    Route::post('hero', [HeroController::class, 'heroStore'])
        ->name('hero.store');

    Route::get('services', [ServiceController::class, 'index'])
        ->name('services');

    Route::get('services/create', [ServiceController::class, 'create'])
        ->name('services.create');

    Route::post('services', [ServiceController::class, 'serviceStore'])
        ->name('services.store');

    Route::get('forum', [ForumController::class, 'index'])
        ->name('forum');

    Route::get('forum/create', [ForumController::class, 'create'])
        ->name('forum.create');

    Route::post('forum', [ForumController::class, 'forumStore'])
        ->name('forum.store');

    Route::get('forum/{forum}', [ForumController::class, 'show'])
        ->name('forum.show');

    Route::get('forum/{forum}/edit', [ForumController::class, 'edit'])
        ->name('forum.edit');

    Route::put('forum/{forum}', [ForumController::class, 'update'])
        ->name('forum.update');

    Route::delete('forum/{forum}', [ForumController::class, 'destroy'])
        ->name('forum.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
