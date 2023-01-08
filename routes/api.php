<?php

use App\Http\Controllers\CrudController;
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

Route::get('reed/',[CrudController::class,'reed']);
Route::get('reed/{id}',[CrudController::class,'show']);
Route::post('reed/',[CrudController::class,'create']);
Route::put('reed/{id}',[CrudController::class,'update']);
Route::delete('reed/{id}',[CrudController::class,'delete']);
