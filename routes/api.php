<?php

use Illuminate\Http\Request;

Route::group([

  'namespace' => 'API',

], function () {

  Route::post('auth/login', 'AuthController@login');
  Route::post('auth/register', 'AuthController@register');
  Route::post('auth/logout', 'AuthController@logout');
  Route::post('auth/refresh', 'AuthController@refresh');
  Route::post('auth/me', 'AuthController@me');

  Route::get('categories', 'CategoryController@allCategory');
  Route::get('sub-categories', 'CategoryController@allSubCategory');

  Route::post('training', 'TrainingController@store');
  Route::get('training', 'TrainingController@index');

});