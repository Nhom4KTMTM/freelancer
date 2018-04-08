<?php 
Route::get('tai-khoan',[
	'uses'=>'UserController@index',
	'as'=>'backend.taikhoan'
]);
Route::get('them-tai-khoan', [
   'uses'=>'UserController@create',
	'as'=>'backend.themtaikhoan'
]);
Route::post('them-tai-khoan', [
   'uses'=>'UserController@store',
	'as'=>'backend.themtaikhoan'
]);
Route::get('sua-tai-khoan/{id}',[
    'uses'=>'UserController@edit',
	'as'=>'backend.suataikhoan'
]);

Route::post('sua-tai-khoan/{id}',[
    'uses'=>'UserController@update',
	'as'=>'backend.suataikhoan'
]);

Route::get('xoa-tai-khoan/{id}',[
    'uses'=>'UserController@destroy',
	'as'=>'backend.xoataikhoan'
]);
 ?>