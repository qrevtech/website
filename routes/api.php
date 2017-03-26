<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/push', function (\App\Http\Requests\PushRequest $pushRequest) {
    event(new \App\Events\Push($pushRequest->input('session'), $pushRequest->input('payload')));
    return response()->json(json_encode([':)']));
});

Route::middleware('auth:api')->resource('links', 'LinkController');
