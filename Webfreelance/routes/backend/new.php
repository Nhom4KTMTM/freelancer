<?php 
 Route::get('tin-can-phe-duyet',[
 	'uses'=>'NewController@tincanpheduyet',
 	'as'=>'backend.tincanpheduyet'

 ]);
  Route::get('chi-tiet-tin-phe-duyet/{id}',[
 	'uses'=>'NewController@chitiettinpheduyet',
 	'as'=>'backend.chitiettinpheduyet'

 ]);
    Route::get('dowloadtinpheduyet/{id}',[
 	'uses'=>'NewController@downloadtinpheduyet',
 	'as'=>'backend.downloadtinpheduyet'

 ]);
    Route::get('xoa-tin/{id}',[
 	'uses'=>'NewController@destroy',
 	'as'=>'backend.xoatin'

 ]);
   Route::get('phe-duyet/{id}',[
 	'uses'=>'NewController@pheduyet',
 	'as'=>'backend.pheduyet'

 ]);
// Tin dang dang
Route::get('tin-dang-dang',[
 	'uses'=>'NewController@tindangdang',
 	'as'=>'backend.tindangdang'

 ]);
Route::get('chi-tiet-tin-dang-dang/{id}',[
 	'uses'=>'NewController@chitiettindangdang',
 	'as'=>'backend.chitiettindangdang'
 ]);
// Tin het han
Route::get('tin-het-han',[
 	'uses'=>'NewController@tinhethan',
 	'as'=>'backend.tinhethan'

 ]);
Route::get('chi-tiet-tin-het-han/{id}',[
 	'uses'=>'NewController@chitiettinhethan',
 	'as'=>'backend.chitiettinhethan'
 ]);


 ?>