<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])
        ->name('home');
Route::get('hero',[HeroController::class,'create'])->name('hero.create');
Route::post('hero',[HeroController::class,'heroStore'])->name('hero.store');
