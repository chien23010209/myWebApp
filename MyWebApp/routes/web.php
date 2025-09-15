<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

// Trang demo
Route::get('/demo', [ShopController::class, 'demo']);

// Trang chủ
Route::get('/', [ShopController::class, 'home']);

// Danh sách sản phẩm
Route::get('/products', [ShopController::class, 'products']);

// Chi tiết sản phẩm
Route::get('/products/{id}', [ShopController::class, 'productDetail']);

// Giỏ hàng
Route::get('/cart', [ShopController::class, 'cart']);

// Thanh toán
Route::get('/checkout', [ShopController::class, 'checkout']);
