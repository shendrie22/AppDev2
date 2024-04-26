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


// give the data 
Route::get('/greet', function () {
    return 'Hello World';
});
// post the data 
route::post('/greeting', function () {
    return 'sdfsdfdsfasdf';
});

// PUT route
Route::put('/update/{id}', function ($id) {
    return "User with ID $id updated!";
});

// PATCH route
Route::patch('/modify/{id}', function ($id) {
    return "User with ID $id modified!";
});

// DELETE route
Route::delete('/delete/{id}', function ($id) {
    return "User with ID $id deleted!";
});


Route::any('/update-user', function () {
    return 'update-user works';
});
// any- accept all the get, post, put, patch, options, delete

Route::get('/user', function (request $request) {
    return $request->name . '-' . $request->email;
});