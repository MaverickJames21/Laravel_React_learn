<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/welcom/{name}', function($name){
//     return 'hello' .$name;
// });

// FUNCTION NEW USER API AVEC FUNCTION
// Route::get('/tenants', function(){

//     $tenant1 = new stdClass();
//     $tenant1->companyName = 'Maverick';
//     $tenant1->companyMail = 'maverick@gmail.com';

//     return response()->json($tenant1);
// });

// PAREIL
// Route::get('/tenants', function(){
//      return response()->json(['success' => 'Methode GET']);
// });

// PAREIL VERIFIER L API
// Route::post('/tenants', function(){
//     return response()->json(['success' => 'Methode POST']);
// });

// Route::post('/tenants', function(){
//     return request()->all();
// });

// TEST ROUTE APELLE CONTROLLER GetMethod
Route::get('/tenants', [ TestController::class,'getMethod' ]);
// OLD SECOND WAY WRITING
// Route::get('/tenants', 'TestController@getMethod');

// TEST ROUTE APELLE CONTROLLER postMethod
Route::post('/tenants', [ TestController::class,'postMethod' ]);
// OLD SECOND WAY WRITING
// Route::post('/tenants', 'TestController@postMethod');

// ROUTE APELLE PHOTO CONTROLLER FUNCTION STORE + PROTEGER MIDDLEWARE
Route::post('/photos', [ PhotoController::class,'store' ]) ->middleware('App\Http\Middleware\PhotoMiddleware');



