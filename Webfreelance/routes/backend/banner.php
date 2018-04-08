<?php 
Route::get('banner',[
	'uses'=>'BannerController@index',
	'as'=>'backend.banner'
]);
Route::get('them-banner', [
   'uses'=>'BannerController@create',
	'as'=>'backend.thembanner'
]);
Route::post('them-banner', [
   'uses'=>'BannerController@store',
	'as'=>'backend.thembanner'
]);
Route::get('sua-banner/{id}',[
    'uses'=>'BannerController@edit',
	'as'=>'backend.suabanner'
]);

Route::post('sua-banner/{id}',[
    'uses'=>'BannerController@update',
	'as'=>'backend.suabanner'
]);

Route::get('xoa-banner/{id}',[
    'uses'=>'BannerController@destroy',
	'as'=>'backend.xoabanner'
]);
 ?>