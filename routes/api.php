<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
	Auth::routes();
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/' , 'UserController@userarea');
});


Route::group(['middleware' => ['web','api' , 'auth' , 'admin']], function(){
    Route::get('/home', 'HomeController@index')->name('home');  
    Route::resource('/categories', 'CategoryController');
    Route::resource('/subCategories', 'SubcategoryController');
    Route::resource('/products', 'ProductController');
    Route::get('/categoryProducts/{category}' , 'CategoryController@categoryProducts')->name('categoryProducts');  
});
Route::get('/categorySubcategories' , 'CategoryController@categorySubcategories')->name('categorySubcategories');