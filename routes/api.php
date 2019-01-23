<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/products','ProductController');

  Route::apiResource('/{product}/reviews','ReviewController');

