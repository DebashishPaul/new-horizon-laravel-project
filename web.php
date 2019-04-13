<?php


Route::get('/laravel', function () {
    echo "ok";
});


Route::match(['put','get'],'/', function () {
    echo "ok";
});

Route::any('/any_param',function(){
	echo "ok";
});

Route::get('method_check','PractiseController@pactiseMethod');

Route::get('id_check/{id}','PractiseController@idCheck');

Route::get('multiple_check/{id2}/{id1}','PractiseController@multiCheck')
			->where(['id2' => '[0-9]+', 'id1' => '[a-z]+']);

Route::get('name_routesss','PractiseController@nameCheck')->name('name_route');

/*
Route::prefix('admin')->group(function(){
	Route::get('dashboard1',function(){
		echo "ok";
	});
	Route::get('dashboard2',function(){
		echo "ok";
	});
	Route::get('dashboard3',function(){
		echo "ok";
	});
	Route::get('dashboard4',function(){
		echo "ok";
	});
	Route::get('dashboard5',function(){
		echo "ok";
	});
	Route::get('dashboard6',function(){
		echo "ok";
	});

});

Route::namespace('Admin')->group(function(){
	Route::get('checkAdmin','AdminController@adminCheck');
});


*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('dashboard','AdminController@adminCheck')
				->name('dashboard');
});