<?php

use App\Http\Controllers\Admin\{
    DashboardController as AdminDashboardController,
};
use App\Http\Controllers\User\{
    DashboardController as UserDashboardController,
    InvitationController as UserInvitationController,
};
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    // ROUTE FOR ADMIN
    Route::get('admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');

    // ROUTE FOR USER
    Route::get('user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
    Route::get('user-invitation', [UserInvitationController::class, 'index'])->name('user-invitation');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
