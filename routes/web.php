<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\admin\eventController;
use App\Http\Controllers\AdminManagementController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

    Route::get('/admin-product', function () {
        return view('admin/pages/admin-product');
    });
    Route::get('/cproduct', function () {
        return view('admin/pages/cproduct');
    });
    Route::get('/uproduct', function () {
        return view('admin/pages/uproduct');
    });
    Route::get('/dproduct', function () {
        return view('admin/pages/dproduct');
    });

    //LALAKPOU
    Route::resource('/admin-event', eventController::class);
    //END LALAKPOU
    
    Route::get('/admin-brand', function () {
        return view('admin/pages/admin-brand');
    });

    Route::get('/admin-management', function () {
        return view('admin/pages/admin-management');
    });
});