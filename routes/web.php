<?php

use Illuminate\Support\Facades\Route;

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
    return view('list');
});

Route::get('/folder/{id}', function ($id) {
    return view('folder');
});

Route::get('/folder', function () {
    return view('folder');
});

Route::get('/file/{id}', function ($id) {
    return view('file');
});

Route::get('/file', function () {
    return view('file');
});
