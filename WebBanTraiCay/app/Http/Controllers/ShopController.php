<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    // Trang chủ -> dùng View
    public function home()
    {
        return view('home'); // gọi resources/views/home.blade.php
    }

    // Danh sách sản phẩm
    public function products()
    {
        return "Đây là Danh sách sản phẩm (ShopController)";
    }

    // Chi tiết sản phẩm
    public function productDetail($id)
    {
        return "Chi tiết sản phẩm có ID: " . $id . " (ShopController)";
    }

    // Giỏ hàng
    public function cart()
    {
        return "Đây là Giỏ hàng (ShopController)";
    }

    // Thanh toán
    public function checkout()
    {
        return "Đây là Trang thanh toán (ShopController)";
    }

    // Trang demo menu
    public function demo()
    {
        return '
            <h1>Demo Web Bán Hàng (ShopController)</h1>
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/products">Danh sách sản phẩm</a></li>
                <li><a href="/products/1">Chi tiết sản phẩm (ID=1)</a></li>
                <li><a href="/cart">Giỏ hàng</a></li>
                <li><a href="/checkout">Thanh toán</a></li>
            </ul>
        ';
    }
}
