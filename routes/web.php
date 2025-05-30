<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [Taskcontroller::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::patch('tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
