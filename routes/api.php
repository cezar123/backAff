<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TodoController;
use \App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::post('/todos', [TodoController::class, 'store'])->name('todo.store');

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('project.show');
Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
