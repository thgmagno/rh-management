<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::redirect('/', 'home');
    Route::view('/home', 'home')->name('home');

    // user profile page
    Route::get(
        '/user/profile',
        [ProfileController::class, 'index']
    )->name('user.profile');
    Route::post(
        '/user/profile/update-password',
        [ProfileController::class, 'updatePassword']
    )->name('user.profile.update-password');
    Route::post(
        '/user/profile/update-data',
        [ProfileController::class, 'updateData']
    )->name('user.profile.update-data');

    // Department routes
    Route::get(
        '/departments',
        [DepartmentController::class, 'index']
    )->name('departments');

    // Create department
    Route::get(
        '/departments/create',
        [DepartmentController::class, 'create']
    )->name('departments.create');
    Route::post(
        '/departments/store',
        [DepartmentController::class, 'store']
    )->name('departments.store');

    // Edit department
    Route::get(
        '/departments/edit/{id}',
        [DepartmentController::class, 'edit']
    )->name('departments.edit');
    Route::put(
        '/departments/update/{id}',
        [DepartmentController::class, 'update']
    )->name('departments.update');

    // Delete department
    Route::delete(
        '/departments/delete/{id}',
        [DepartmentController::class, 'destroy']
    )->name('departments.destroy');
});
