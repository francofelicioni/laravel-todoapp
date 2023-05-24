<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TodosController::class, 'index'])->name('todos');

Route::post('/tasks', [TodosController::class, 'store'])->name('todos');

Route::get('/tasks/{id}', [TodosController::class, 'show'])->name('todos-edit');

Route::patch('/tasks/{id}', [TodosController::class, 'update'])->name('todos-update');

Route::delete('/tasks/{id}', [TodosController::class, 'delete'])->name('todos-delete');

Route::resource('categories', CategoriesController::class);