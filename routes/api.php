<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Route::get('/user', function (Request $request) {
//    return $request->user();
// })->middleware('auth:sanctum');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'register']);
Route::post('/users/login', [\App\Http\Controllers\UserController::class, 'login']);

Route::middleware(\App\Http\Middleware\ApiAuthMiddleware::class)->group(function () {
    Route::get('/users/current', [\App\Http\Controllers\UserController::class, 'get']);
    Route::patch('/users/current', [\App\Http\Controllers\UserController::class, 'update']);
    Route::delete('/users/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::post('/api/contacts/{idContact}/addresses', 'AddressController@store');
    Route::get('/api/contacts/{idContact}/addresses', 'AddressController@index');
    Route::get('/api/contacts/{idContact}/addresses/{idAddress}', 'AddressController@show');
    Route::put('/api/contacts/{idContact}/addresses/{idAddress}', 'AddressController@update');
    Route::delete('/api/contacts/{idContact}/addresses/{idAddress}', 'AddressController@destroy');
    Route::post('/api/contacts', [ContactController::class, 'store']);
    Route::get('/api/contacts', [ContactController::class, 'search']);
    Route::put('/api/contacts/{id}', [ContactController::class, 'update']);
    Route::get('/api/contacts/{id}', [ContactController::class, 'show']);
    Route::delete('/api/contacts/{id}', [ContactController::class, 'destroy']);
});
