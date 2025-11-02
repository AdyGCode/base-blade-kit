<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ComponentDemoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticPageController::class, 'home'])
    ->name('home');

Route::get('/components/index', [ComponentDemoController::class, 'index'])
    ->name('components.index');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('dashboard');
});

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])
            ->name('index');

        Route::get('users', [AdminController::class, 'users'])->name('users');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/**
 * Demo page routing for components.
 *
 * Remove when not needed, as with:
 * - App\Http\Controllers\ComponentDemoController.php
 * - ...
 */


Route::prefix('components')
    ->name('components.')
    ->group(function () {
        Route::get('/', [ComponentDemoController::class, 'index'])
            ->name('index');
        Route::get('ckeditor', [ComponentDemoController::class, 'ckeditor'])
            ->name('ckeditor');
        Route::get('inputs', [ComponentDemoController::class, 'inputs'])
            ->name('inputs');
        Route::get('link-buttons', [ComponentDemoController::class, 'linkButtons'])
            ->name('link-buttons');
        Route::get('badges', [ComponentDemoController::class, 'badges'])
            ->name('badges');
    });

require __DIR__.'/auth.php';
