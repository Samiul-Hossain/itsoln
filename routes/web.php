<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\messagesController;

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
    return view('index');
});
Route::get('/product-services', function () {
    return view('pages.product-services');
});
Route::get('/tech-collaborators', function () {
    return view('pages.tech-collaborators');
});
Route::get('/contacts', function () {
    return view('pages.contacts');
});
Route::post('/contacts',[messagesController::class,'store']);

