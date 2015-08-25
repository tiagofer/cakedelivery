<?php
Route::pattern('operation', '[A-Za-z]+');
Route::pattern('id', '[0-9]+');


Route::group(['prefix'=>'admin/products'], function ()
{
  Route::get('{operation?}', [
    'as' => 'adminproducts',
    'uses' => 'AdminProductsController@index'
    ]);
});

Route::group(['prefix'=>'admin/categories'], function ()
{
//   Route::get('{operation?}', 'AdminCategoriesController@index');
    Route::get('/list', [
      'as' => 'listcategories',
      'uses' => 'CategoriesController@index'
      ]);
    Route::get('/create', [
      'as' => 'createcategory',
      'uses' => 'CategoriesController@create'
      ]);
    Route::post('/store', [
      'as' => 'storage',
      'uses' => 'CategoriesController@store'
      ]);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id?}', function ($id = 0)
{
  if ($id) {
    return "Olá $id";
  }
    return "Não Possui ID";
});


//Categories admin
//Route::get('admin/categories','AdminCategoriesController@index');

//Route::get('admin/products', 'AdminProductsController@index');
