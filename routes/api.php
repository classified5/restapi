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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['prefix' => 'api/v1'], function ($api) {

	// $api->get('/', 'App\Api\V1\Controllers\GoodsController@index');

    $api->post('authenticate', 'App\Api\V1\Controllers\AuthenticateController@authenticate');
	$api->post('logout', 'App\Api\V1\Controllers\AuthenticateController@logout');
	$api->get('token', 'App\Api\V1\Controllers\AuthenticateController@getToken');

	$api->group( ['middleware' => 'api.auth'] , function ($api) {
    	$api->get('/goods', 'App\Api\V1\Controllers\GoodsController@index');
    	$api->post('/goods', 'App\Api\V1\Controllers\GoodsController@create');
    	$api->put('/goods/{$id}', 'App\Api\V1\Controllers\GoodsController@update');
//        $api->put('/goods', function ()
//        {
//            return "halo";
//        });
	});
});

