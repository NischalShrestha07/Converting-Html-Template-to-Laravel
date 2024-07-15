<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;


Route::get('/', [HomeController::class, 'index']);
