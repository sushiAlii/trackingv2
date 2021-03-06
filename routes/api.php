<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


if (App::environment('production')) {
    URL::forceScheme('https');
}
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
//=====================AUTH========================
Route::post(uri: '/login', action: [App\Http\Controllers\Api\Auth\AuthController::class, 'login']);
Route::post(uri: '/logout', action: [App\Http\Controllers\Api\Auth\AuthController::class, 'logout'])->middleware('auth:sanctum');
//=====================AUTH========================

Route::get(uri: '/manage_users', action: [App\Http\Controllers\Api\UserController::class, 'index']);

Route::get(uri: '/offices',action: [App\Http\Controllers\Api\OfficeController::class, 'index']);
Route::get(uri: '/offices/graph', action: [App\Http\Controllers\Api\OfficeController::class, 'office_graphs']);

Route::get(uri: 'documents', action: [App\Http\Controllers\Api\PPMPController::class, 'index']);
Route::get(uri: 'documents/tracking/id={id}', action: [App\Http\Controllers\Api\PPMPTravelLogController::class, 'show']);

Route::get(uri: 'documents/details/id={id}', action: [App\Http\Controllers\Api\DocumentDetailController::class, 'showPPMPDetails']);
Route::get(uri: 'documents/details/ppmp={id}', action: [App\Http\Controllers\Api\DocumentController::class, 'ppmpWithId']);

Route::post(uri: '/scan', action: [App\Http\Controllers\Api\PPMPTravelLogController::class, 'store']);