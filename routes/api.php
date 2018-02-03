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

Route::post('/check-token', 'api\UserController@checkAuthToken');

Route::group(['middleware' => 'auth:api'], function()
{

    Route::post('get-details', 'api\LoginController@getDetails');

    Route::get('/notifications', 'api\UserController@getNotifications');

    //Route::get('/notification/{notification}', '');

    // User routes
    Route::group(['prefix' => '/users/'], function () {

        Route::get('/', 'api\UserController@index');

        Route::get('/{user}', 'api\UserController@show');

        Route::post('/', 'api\UserController@store');

        Route::patch('/', 'api\UserController@update');

        Route::delete('/{user}', 'api\UserController@destroy');

    });

    // projects routes
    Route::group(['prefix' => '/projects/'], function () {

        Route::get('/', 'api\ProjectController@index');

        Route::get('/{project}', 'api\ProjectController@show');

        Route::post('/', 'api\ProjectController@store');

        Route::patch('/edit', 'api\ProjectController@update');

        Route::delete('/{project}', 'api\ProjectController@destroy');

        // Requests Routes ..
        Route::group(['prefix' => '/{project}/requests'], function () {

            Route::get('/', 'api\RequestController@index');

            Route::get('/{request}/', 'api\RequestController@show');

            Route::post('/', 'api\RequestController@store');

            Route::delete('/', 'api\RequestController@destroy');

        });

        // Phases routes
        Route::group(['prefix' => '/{project}/phase'], function() {

            Route::get('/', 'api\PhaseController@index');

            Route::get('/{phase}', 'api\PhaseController@show');

            Route::post('/', 'api\PhaseController@store');

            Route::patch('/edit', 'api\PhaseController@update');

            Route::delete('/', 'api\PhaseController@destroy');

        });

        // Payout routes
        Route::group(['prefix' => '/payouts/'], function () {

            Route::get('/', 'api\PayoutsController@index');

            Route::get('/{payout}', 'api\PayoutsController@show');

            Route::post('/', 'api\PayoutsController@store');

            Route::patch('/', 'api\PayoutsController@update');

            Route::delete('/{payout}', 'api\PayoutsController@destroy');

        });
    });

    Route::post('logout', 'api\LoginController@logout');
});