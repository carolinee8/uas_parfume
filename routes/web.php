<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

Route::get('/', [BrandController::class, 'index']);

Route::get('/brand', [BrandController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/acara', [AcaraController::class, 'index']);

Route::get('/acara/{acara}', [AcaraController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


/**
* superadmin
*/
//--------------------------------------------//
Route::get('/admin/admin-product', function () {
    return view('admin/pages/admin-product');
});
Route::get('/admin/cproduct', function () {
    return view('admin/pages/cproduct');
});
Route::get('/admin/uproduct', function () {
    return view('admin/pages/uproduct');
});
Route::get('/admin/dproduct', function () {
    return view('admin/pages/dproduct');
});
//--------------------------------------------//
Route::get('/admin/admin-event', function () {
    return view('admin/pages/admin-event');
});
Route::get('/admin/admin-brand', function () {
    return view('admin/pages/admin-brand');
});
Route::get('/admin/admin-profile', function () {
    return view('admin/pages/admin-profile');
});
Route::get('/admin/admin-management', function () {
    return view('admin/pages/admin-management');
});
Route::get('/admin/cevent', function () {
    return view('admin/pages/cevent');
});