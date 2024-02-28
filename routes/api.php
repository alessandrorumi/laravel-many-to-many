<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// La rotta completa è 'http://127.0.0.1:*porta*/api/*prefisso*/*rotta*'

Route::group(['prefix' => '/v1'], function() {

    Route::get('/mytest', [ApiController::class, 'getMyTest']);

    Route::get('/technologies', [ApiController::class, 'getTechnologies']);
});
