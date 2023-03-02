<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home')->name('home');
});

Route::get('/contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('/preguntas', [App\Http\Controllers\PreguntaController::class,'index']);

Route::post('/corrector',[\App\Http\Controllers\CorrectorController::class,'corregir'])->name('corrector');
Route::post('/preguntasbloque', [App\Http\Controllers\PreguntaController::class,'showByBloque'])->name('preguntasbloque');
Route::post('/preguntas', [App\Http\Controllers\PreguntaController::class,'showByCategory'])->name('preguntas');
Route::post('/preguntasgeneral', [App\Http\Controllers\PreguntaController::class,'general'])->name('preguntasgeneral');
Route::get('/test', [App\Http\Controllers\TestPorCateriasController::class,'index'])->name('test');


Route::get('/home', function(){
    return view('home');
})->name('home');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
