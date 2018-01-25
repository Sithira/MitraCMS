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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'api\LoginController@login');

Route::group(['middleware' => 'auth:api'], function()
{
    Route::post('get-details', 'api\LoginController@getDetails');

    Route::group(['prefix' => '/projects/'], function () {

        Route::get('/', 'api\ProjectController@index');

        Route::get('/{project}', 'api\ProjectController@show');

        Route::post('/', 'api\ProjectController@store');

        Route::delete('/{project}', 'api\ProjectController@store');

        Route::group(['prefix' => '/{project}/phase'], function() {

            Route::get('/', 'api\PhaseController@index');

            Route::get('/{phase}', 'api\PhaseController@index');

        });

    });

    Route::post('logout', 'api\LoginController@logout');
});