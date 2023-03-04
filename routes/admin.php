<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeControoller;
use App\http\Controllers\Admin\BloqueController;


Route::get("/", [HomeControoller::class,'index']);

Route::resource("bloques",BloqueController::class)->names('admin.bloque');