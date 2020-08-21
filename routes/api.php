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

Route::name('tasks.')->prefix('tasks')->group(function () {
    Route::post('/', 'StartTaskController')->name('start');
    Route::get('/', 'GetAllTaskController')->name('get');
    Route::get('/{taskId}', 'FindTaskController')->name('find');
});
