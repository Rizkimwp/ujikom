<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group( function() {
    Route::controller(CrudController::class)->group(function() {
        Route::get('/', 'index');
    });

});

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/loginstrore', [AuthController::class, 'login']);
