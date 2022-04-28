<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistsController;

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

Route::get('/', [TodolistsController::class, 'index'])->name('todo.index');
Route::post('/', [TodolistsController::class, 'store'])->name('todo.store');
Route::patch('/{todolist:id}', [TodolistsController::class, 'update'])->name('todo.update');
Route::delete('/{todolist:id}', [TodolistsController::class, 'destroy'])->name('todo.destroy');
