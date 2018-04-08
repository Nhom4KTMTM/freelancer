<?php 
Route::get('khach-hang',[
	'uses'=>'CustomerController@index',
	'as'=>'backend.khachhang'
]);

Route::get('chi-tiet-khach-hang/{id}',[
    'uses'=>'CustomerController@chitiet',
	'as'=>'backend.chitiet'
]);
Route::get('download/{id}',[
    'uses'=>'CustomerController@download',
	'as'=>'backend.dowloadcv'
]);
 ?>