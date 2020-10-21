<?php

use App\Http\Controllers\AuthController;
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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::post('upload-image','AuthController@uploadImage');
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@getUser');
        Route::put('rename','AuthController@rename');
        Route::get('user_id','AuthController@getUser_id');
    });
});




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
