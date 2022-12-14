<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;

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

Route::post('/books', [BooksController::class, 'insert']);

Route::put('/books', [BooksController::class, 'update']);

Route::delete('/books/{id}', [BooksController::class, 'delete']);

Route::get('/books', [BooksController::class, 'show']);

Route::get('/books/{name}', [BooksController::class, 'show_name']);

Route::get('/user', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);


