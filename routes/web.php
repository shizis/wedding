<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get("/{id}/to/{slug}/{uuid}", [UserController::class, 'guest'])
    ->name('user.guest')
    ->whereUuid('uuid');

Route::prefix('admin')
    ->middleware(['role:Super-Admin'])
    ->controller(AdminController::class)
    ->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/guests', 'guests')->name('admin.guests');
    });
