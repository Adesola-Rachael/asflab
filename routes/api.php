<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\api\authorController;
use App\Http\Controllers\api\UserController;

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
// Route::any('/register',[UserController::class, 'register']);
// Route::get('/posts',[PostController::class, 'getPost']);
// Route::get('/post/{id}',[PostController::class, 'getPostById']);
// Route::post('/post',[PostController::class, 'createPost']);
// Route::put('/post/{id}',[PostController::class, 'updatePost']);
// Route::delete('/post/{id}',[PostController::class, 'deletePost']);
// Route::post('/payment',[paymentController::class, 'checkTransaction_id']); 
// Route::get('/payment',[paymentController::class, 'getpay']);
// Route::post('/exists',[paymentController::class, 'transaction_exists']);
Route::get('/authors',[api\authorController::class,'author']);
Route::post('/author',[api\authorController::class,'createAuthor']);
// Route::post('/register',[UserController::class, 'postRegister']);
