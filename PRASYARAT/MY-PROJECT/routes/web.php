<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\UsersAdminController;
use App\Http\Controllers\AdminManageUsersController;
use App\Http\Controllers\AdminAddUserController;
use App\Http\Controllers\AdminUpdateUserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ProfileUserController;

use App\Http\Controllers\HomeUserController;

Route::get('/Login', [LoginController::class, 'Login']);
Route::post('/Login', [LoginController::class, 'Authenticate']);

Route::get('/Register', [RegisterController::class, 'Register']);
Route::post('/Register', [RegisterController::class, 'Store']);

Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'cekRole:User'], function () {
        Route::get('/HomeUser', [HomeUserController::class, 'HomeUser'])->name('HomeUser');
        Route::get('/ProfileUser', [ProfileUserController::class, 'ProfileUser'])->name('ProfileUser');
    });
    Route::group(['middleware' => 'cekRole:Admin'], function () {
        Route::get('/HomeAdmin', [HomeAdminController::class, 'HomeAdmin'])->name('HomeAdmin');
        Route::get('/UsersAdmin', [UsersAdminController::class, 'UsersAdmin']);
        Route::get('/AdminManageUsers', [AdminManageUsersController::class, 'AdminManageUsers'])->name('AdminManageUsers');
        Route::delete('/AdminManageUsers/{id}', [AdminManageUsersController::class, 'Delete']);
        Route::get('/AdminAddUser', [AdminAddUserController::class, 'AdminAddUser']);
        Route::post('/AdminAddUser', [AdminAddUserController::class, 'Store']);
        Route::get('/AdminUpdateUser/{id}', [AdminUpdateUserController::class, 'AdminUpdateUser']);
        Route::put('/AdminUpdateUser/{id}', [AdminUpdateUserController::class, 'AdminUpdateData']);
        Route::get('/ProfileAdmin', [ProfileAdminController::class, 'ProfileAdmin']);
    });
});
