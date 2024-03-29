<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProjectController;

Route::get('/', [TypeController::class, 'index'])
    ->name('type.index');

    
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('project.index');

Route::get('/projects/create', [ProjectController::class, 'create'])
    ->name('project.create');

Route::post('/projects/create', [ProjectController::class, 'store'])
    ->name('project.store');

Route::get('/projects/{id}', [ProjectController::class, 'show'])
    ->name('project.show');

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])
    ->name('project.edit');

Route::patch('/projects/{id}', [ProjectController::class, 'update'])
    ->name('project.update');

Route::delete('/project/{id}/destroy', [ProjectController::class, 'destroy'])
->name('project.destroy');