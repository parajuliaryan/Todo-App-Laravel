<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [TodoController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [TodoController::class,'addTodo'])->name('addingTodo');
    Route::get('/dashboard/{todoValue}', [TodoController::class,'destroyTodo'])->name('destroyingTodo');
});