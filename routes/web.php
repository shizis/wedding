<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/', 'index')->name('admin.index');
});
