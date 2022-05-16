<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\IngatlanController;
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
    return view('ingatlanok');
});
Route::post('/ingatlanok',[IngatlanController::class,'store']);
Route::delete('/ingatlanok/{id}',[IngatlanController::class,'destroy']);
Route::get('/keres={ertek}',[IngatlanController::class,'keres']);
Route::get('/rendez={ertek}',[IngatlanController::class,'rendez']);
Route::get('/kategoriak',[KategoriaController::class,'index']);
Route::get('/ingatlanok',[IngatlanController::class,'index']);
Route::put('/ingatlanok/{id}',[IngatlanController::class,'update']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
