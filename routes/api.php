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

/**
 * Route Navigation
 */
Route::get('/v1/navigation', function () {
    return file_get_contents(public_path('data/menu.json'));
});

/**
 * Route Content Menu
 */
Route::get('/v1/content-home', function () {
    return file_get_contents(public_path('data/home.json'));
});

/**
 * Route Business Location
 */
Route::get('/v1/business/location', function () {
    return file_get_contents(public_path('data/business_location.json'));
});

/**
 * Route Business Tops
 */
Route::get('/v1/business/tops', function () {
    return file_get_contents(public_path('data/business_tops.json'));
});

/**
 * Route Business Tops
 */
Route::get('/v1/business/chips', function () {
    return file_get_contents(public_path('data/business_chips.json'));
});
