<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserLogin;
use App\Http\Controllers\ContentModeration;
use App\Http\Controllers\Api\AddPermissions;
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
Route::post('add-permission',[AddPermissions::class,'add_permission'])->name('add-permission');
Route::post('update-permission/{id}',[AddPermissions::class,'update_permission'])->name('update-permission');
Route::post('/content-moderation', [AddPermissions::class, 'add'])->name('content-moderation');
Route::post('/user-login', [UserLogin::class, 'sendToken'])->name('user-login');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
