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

Route::get('test', function(){
    // $query = '
    // SELECT categorys.*, PARENT."title" as "NameParent"
    // FROM categorys
    // LEFT JOIN categorys PARENT
    // ON PARENT."id" = categorys."idParent"
    // ';
    // $data = DB::select($query);
    // $result = array(
    //     'status' => 'OK',
    //     'message'=> 'Fetch Successfully',
    //     'data'=> $data
    // );
    // return response()->json($result);
    $data = DB::table('categorys')->get()->toArray();
    dd($data);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
   
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::delete('logout', 'AuthController@logout');
        Route::get('me', 'AuthController@user');
        Route::group(
            [
                'middleware' => 'permission:' . \ACL::PERMISSION_PERMISSION_MANAGE,
            ],
            function () {
                Route::apiResource('roles', 'RoleController');
                Route::apiResource('permissions', 'PermissionController');
            }
        );
       
    });
});
