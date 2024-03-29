<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressViewController;
use App\Http\Controllers\ContactViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    Route::get('/addresses', [AddressViewController::class, 'index']);
    Route::get('/contacts', [ContactViewController::class, 'index']);
    
});
