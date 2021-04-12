<?php

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('type', 'api\TypeController@index');

Route::post('type/store', 'api\TypeController@store');

Route::post('type/update/{id}', 'api\TypeController@update');

Route::get('asset', 'api\AssetController@index');

Route::post('asset/store', 'api\AssetController@store');

Route::post('asset/update/{id}', 'api\AssetController@update');

Route::get('owner/{owner_type}', 'api\OwnerController@index');

Route::post('owner/store/{owner_type}', 'api\OwnerController@store');

Route::post('owner/update/{id}/{owner_type}', 'api\OwnerController@update');

Route::get('country', 'api\CountryController@index');  // Countries route

Route::get('country/state', 'api\CountryController@showState'); // Countries-States route

Route::get('state/city', 'api\StateController@showCity'); // States-Cities route

Route::get('country/id', 'api\CountryController@CountryById'); // States-Cities route



