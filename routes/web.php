<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'welcome']);
Route::post('/', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'checkAuth'], function() {
    Route::get('admin/dashboard', [AdminController::class, 'welcome']);
    Route::get('admin/dashboard/export', [AdminController::class, 'export']);
    Route::post('admin/dashboard/import', [AdminController::class, 'import']);
});

Route::group(['middleware' => 'checkUser'], function() {
    Route::get('user/dashboard', [UserController::class, 'welcome']); 
});