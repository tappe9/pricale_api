<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainCalendarController;
use App\Http\Controllers\GetDbController;

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

Route::get('/sample', [MainCalendarController::class, 'apiHello']);
Route::get('/members', [GetDbController::class, 'getMembers']);
Route::get('/users', [GetDbController::class, 'getUsers']);