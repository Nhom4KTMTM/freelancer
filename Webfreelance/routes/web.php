<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin','namespace'=>'Backend'], function() {
    //
    require_once 'backend/home.php';
    require_once 'backend/home.php';
    require_once 'backend/category.php';
    require_once 'backend/city.php';
    require_once 'backend/user.php';
    require_once 'backend/customer.php';
    require_once 'backend/new.php';
    require_once 'backend/banner.php';
});

Route::get('/',[
	'uses' => 'FrontendController@index',
	'as' =>'trangchu'
]);
Route::get('tim-viec',[
    'uses' => 'FrontendController@timviec',
    'as' => 'timviec'
]);
Route::post('tim-viec',[
    'uses' => 'FrontendController@timviec',
    'as' => 'timviec'
]);

