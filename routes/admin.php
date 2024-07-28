<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

// Aplicar el middleware a las rutas en `routes/admin.php`
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleController::class)->names('roles');
    Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('users');
});