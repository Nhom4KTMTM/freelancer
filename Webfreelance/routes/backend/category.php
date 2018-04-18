<?php 
Route::get('danh-muc',[
	'uses'=>'CategoryController@index',
	'as'=>'backend.danhmuc'
]);
Route::get('them-danh-muc', [
   'uses'=>'CategoryController@create',
	'as'=>'backend.themdanhmuc'
]);
Route::post('them-danh-muc', [
   'uses'=>'CategoryController@store',
	'as'=>'backend.themdanhmuc'
]);
Route::get('sua-danh-muc/{id}',[
    'uses'=>'CategoryController@edit',
	'as'=>'backend.suadanhmuc'
]);

Route::post('sua-danh-muc/{id}',[
    'uses'=>'CategoryController@update',
	'as'=>'backend.suadanhmuc'
]);

Route::get('xoa-danh-muc/{id}',[
    'uses'=>'CategoryController@destroy',
	'as'=>'backend.xoadanhmuc'
]);
 ?>