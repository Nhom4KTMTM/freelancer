<?php 
Route::get('thanh-pho',[
	'uses'=>'CityController@index',
	'as'=>'backend.thanhpho'
]);
Route::get('them-thanh-pho', [
   'uses'=>'CityController@create',
	'as'=>'backend.themthanhpho'
]);
Route::post('them-thanh-pho', [
   'uses'=>'CityController@store',
	'as'=>'backend.themthanhpho'
]);
Route::get('sua-thanh-pho/{id}',[
    'uses'=>'CityController@edit',
	'as'=>'backend.suathanhpho'
]);

Route::post('sua-thanh-pho/{id}',[
    'uses'=>'CityController@update',
	'as'=>'backend.suathanhpho'
]);

Route::get('xoa-thanh-pho/{id}',[
    'uses'=>'CityController@destroy',
	'as'=>'backend.xoathanhpho'
]);
 ?>