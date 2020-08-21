<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('/shares', 'SharesController');
Route::post('/register', 'RegisterController@post');
Route::post('/login', 'LoginController@post');
Route::post('/logout', 'LogoutController@post');
Route::get('/user', 'UsersController@get');
Route::put('/user', 'UsersController@put');
Route::post('/like', 'LikesController@post');
Route::delete('/like', 'LikesController@delete');
Route::post('/comment', 'CommentsController@post');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
