<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\BookshelfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/book', [BookController::class, 'index'])->name('Book');
    
    Route::get('/bookshelf', [BookshelfController::class, 'index'])->name('Bookshelf.index');
    Route::post('/bookshelf', [BookshelfController::class, 'store'])->name('Bookshelf.store');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
