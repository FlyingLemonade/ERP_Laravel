<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('loggedIn');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/inventory', [InventoryController::class, 'showInventoryPage'])->name('inventory');
    Route::get('/sales', [DashboardController::class, 'showDashboard'])->name('sales');
    Route::get('/user', [DashboardController::class, 'showDashboard'])->name('user');
    Route::get('/order', [DashboardController::class, 'showDashboard'])->name('order');
    Route::get('/supplier', [SupplierController::class, 'showSupplierPage'])->name('supplier');
});

Route::get('/logout', [LoginController::class, 'logout']);
