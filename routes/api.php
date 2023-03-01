<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// the prefix /api is automatic in this file (api.php)
// api/books/latest
// creating route for api
Route::get('books/latest', [BookController::class, 'latest']);

// search bar route
Route::get('books/search', [BookController::class, 'search']);


// user api
Route::get('users', [UserController::class, 'index']);
