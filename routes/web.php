<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogActivityController;

use App\Http\Middleware\UserActiveCheck;


Route::get('/', [BaseController::class, 'sample_360'])->name('dashboard');

// ==================================================================================================================== //
//                                              ** AUTHENTICATION ROUTES **                                             //
// =====================================================================================================================//
Route::get('__login', [BaseController::class, 'login'])->name('login');
Route::post('/__login', [BaseController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [BaseController::class, 'logout'])->name('logout');

Route::get('/register', [BaseController::class, 'register'])->name('register');
Route::post('/register', [BaseController::class, 'registerPost'])->name('register-post');

Route::get('/reset-password', [BaseController::class, 'resetPassword'])->name('reset-password');
Route::post('/reset-password', [BaseController::class, 'resetPasswordConfirm'])->name('reset-password');
Route::get('/change-password/{token}', [BaseController::class, 'changePasswordForm'])->name('change-password-form');
Route::post('/change-password', [BaseController::class, 'changePassword'])->name('change-password');

Route::middleware(['auth', 'user_active'])->group(function () {
    // ==================================================================================================================== //
    //                                                   ** MAIN ROUTES **                                                  //
    // =====================================================================================================================//
    Route::get('/dashboard', [BaseController::class, 'dashboard'])->name('dashboard');

    // Configuration
    Route::resource('/configuration/user-management', UserController::class)->parameters(['user-management' => 'user']);
    Route::resource('/configuration/log-activity', LogActivityController::class);

    // ==================================================================================================================== //
    //                                                  ** CUSTOME ROUTES **                                                //
    // ==================================================================================================================== //
    Route::post('/configuration/user-management/activation', [UserController::class, 'userActivation'])->name('user-activation');
    Route::get('/configuration/log-activity/export', [LogActivityController::class, 'export'])->name('log-activity-export');

    Route::get('/sample-360-view', [BaseController::class, 'sample_360'])->name('sample-360-view');
});

Route::get('/test-404', [BaseController::class, 'test_404'])->name('test-404');