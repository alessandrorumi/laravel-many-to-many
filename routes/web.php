<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeController;

Route::get('/', [TypeController::class, 'index'])
    ->name('type.index');
    
