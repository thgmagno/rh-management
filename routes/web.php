<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RhUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::redirect('/', 'home');
    Route::view('/home', 'home')->name('home');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
        Route::post('/update-data', [ProfileController::class, 'updateData'])->name('profile.update-data');
    });

    Route::group(['prefix' => 'departments'], function () {
        // view all departments
        Route::get(
            '/',
            [DepartmentController::class, 'index']
        )->name('departments');

        // Create department
        Route::get(
            '/create',
            [DepartmentController::class, 'create']
        )->name('departments.create');
        Route::post(
            '/store',
            [DepartmentController::class, 'store']
        )->name('departments.store');

        // Edit department
        Route::get(
            '/edit/{id}',
            [DepartmentController::class, 'edit']
        )->name('departments.edit');
        Route::put(
            '/update/{id}',
            [DepartmentController::class, 'update']
        )->name('departments.update');

        // Delete department
        Route::get(
            '/delete/{id}',
            [DepartmentController::class, 'destroyConfirm']
        )->name('departments.destroy.confirm');
        Route::delete(
            '/delete/{id}',
            [DepartmentController::class, 'destroy']
        )->name('departments.destroy');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('users');
    });

    Route::group(['prefix' => 'rh-users'], function () {
        Route::get('/', [RhUserController::class, 'index'])->name('rh-users.index');

        Route::get('/create', [RhUserController::class, 'create'])->name('rh-users.create');
        Route::post('/store', [RhUserController::class, 'store'])->name('rh-users.store');

        Route::get('/edit/{id}', [RhUserController::class, 'edit'])->name('rh-users.edit');
        Route::put('/update/{id}', [RhUserController::class, 'update'])->name('rh-users.update');

        Route::get('/delete/{id}', [RhUserController::class, 'destroyConfirm'])->name('rh-users.destroy.confirm');
        Route::delete('/delete/{id}', [RhUserController::class, 'destroy'])->name('rh-users.destroy');
    });
});
