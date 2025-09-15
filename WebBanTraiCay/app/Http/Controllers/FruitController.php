<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        $fruits = Fruit::all(); // ORM lấy từ DB
        return view('fruits', compact('fruits'));
    }
}
