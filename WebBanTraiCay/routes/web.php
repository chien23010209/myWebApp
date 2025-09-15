<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

Route::get('/fruits', [FruitController::class, 'index']);
