<?php


Route::post('loginCheck','admin\SigninController@loginCheck');
Route::get('/login','admin\SigninController@index');

Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','MainController@index');

	Route::get('/receipes','MainController@receipe')->name('receipe');
	Route::get('/receipe-details','MainController@receipe_details')->name('receipe-details');

	Route::get('/blog','MainController@blog_show')->name('blog');

	Route::get('/contact','MainController@contact_show')->name('contect');

});

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//backend ...................
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'loginStatus'],function(){
	Route::get('/dashboard', 'MainController@dashboard_show')
		->name('dashboard');

	// user...................
	Route::get('/category-create', 				'CategoryController@index')			->name('category-create');
	Route::post('/category-insert', 			'CategoryController@save_data')		->name('category-insert');
	Route::get('/all-category', 				'CategoryController@user_view')		->name('all-category');
	Route::get('/category-delete/{id}', 		'CategoryController@delete_data')	->name('category-delete');
	Route::get('/category-edit/{id}', 			'CategoryController@edit_data')		->name('category-edit');
	Route::post('/category-update/{id}', 		'CategoryController@update_data')	->name('category-update');

	// sub category...................
	Route::get('/subcategory-create', 				'SubcategoryController@index')			->name('subcategory-create');
	Route::post('/subcategory-insert', 				'SubcategoryController@save_data')		->name('subcategory-insert');
	Route::get('/all-subcategory', 					'SubcategoryController@user_view')		->name('all-subcategory');
	Route::get('/subcategory-delete/{id}', 			'SubcategoryController@delete_data')	->name('subcategory-delete');
	Route::get('/subcategory-edit/{id}', 			'SubcategoryController@edit_data')		->name('subcategory-edit');
	Route::post('/subcategory-update/{id}', 		'SubcategoryController@update_data')	->name('subcategory-update');
	

	// recipe...................
	Route::get('/receipe-create','ReceipeController@index')->name('receipe-create');
	Route::post('/receipe-insert','ReceipeController@save_data')		->name('receipe-insert');
	Route::get('/all-receipe', 					'ReceipeController@user_view')		->name('receipe-users');
	Route::get('/receipe-delete/{id}', 			'ReceipeController@delete_data')	->name('receipe-delete');
	Route::get('/receipe-edit/{id}', 			'ReceipeController@edit_data')		->name('receipe-edit');
	Route::post('/receipe-update/{id}', 		'ReceipeController@update_data')	->name('receipe-update');

	// user...................
	Route::get('/user-create', 				'UserController@index')			->name('user-create');
	Route::post('/user-insert', 			'UserController@save_data')		->name('user-insert');
	Route::get('/all-users', 				'UserController@user_view')		->name('all-users');
	Route::get('/user-delete/{id}', 		'UserController@delete_data')	->name('user-delete');
	Route::get('/user-edit/{id}', 			'UserController@edit_data')		->name('user-edit');
	Route::post('/user-update/{id}', 		'UserController@update_data')	->name('user-update');

	Route::post('/add_receipe','ReceipeController@addReceipe')->name('add_receipe');
	Route::get('/add_slider','SliderController@addSlider')->name('add_slider');
	Route::post('/insert_slider','SliderController@save')->name('save');
});



