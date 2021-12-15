<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\AdminAcaraController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminTagController;
use App\Http\Controllers\admin\AdminUserController;

Route::get('/', [BrandController::class, 'index']);

Route::get('/brand', [BrandController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/acara', [AcaraController::class, 'index']);

Route::get('/acara/{acara}', [AcaraController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LogoutController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


/**
* superadmin
*/
//--------------------------------------------//
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function(){
        return view('admin/dashboard/dashboard');
    });

    Route::resource('/admin-product', AdminProductController::class);

    Route::resource('/admin-event', AdminAcaraController::class);

    Route::resource('/admin-tag', AdminTagController::class);
    
    Route::resource('/admin-management', AdminUserController::class);
    
    Route::get('/admin-brand', function () {
        return view('admin/pages/Brand/admin-brand');
    });
});