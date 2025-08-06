<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('user.index');
});

Route::get('/ziqfa-silvi', [UserController::class, 'index'])->name('user.index');

Route::get("/ziqfa-silvi/{id}/to/{slug}/{uuid}", [UserController::class, 'guest'])
    ->name('user.guest')
    ->whereUuid('uuid');

Route::prefix('admin')
    ->middleware(['role:Super-Admin'])
    ->controller(AdminController::class)
    ->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/guests', 'guests')->name('admin.guests');
    });