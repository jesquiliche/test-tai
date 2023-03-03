<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeControoller;

Route::get("/", [HomeControoller::class,'index']);