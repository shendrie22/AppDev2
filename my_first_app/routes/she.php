<?php

use App\Http\Controllers\UserController;
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



Route::get('/greet', function () {
    return 'Hello World';
});
// get the data 
route::post('/greeting', function () {
    return 'sdfsdfdsfasdf';
});
// give the data 


Route::any('/update-user', function () {
    return 'update-user works';
});
// any- accept all the get, post, put, patch, options, delete

Route::get('/user', function (request $request) {
    return $request->name . '-' . $request->email;
});