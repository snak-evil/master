<?php



Route::get('/','ClientController@index');
Route::get('/admin/dashboard','AdministratorController@index');

//Category Block
Route::get('/admin/categories','CategoriesController@index');
Route::get('/admin/categories/create','CategoriesController@create');
Route::post('/admin/categories/save','CategoriesController@store');
Route::get('/admin/categories/delete/{id}','CategoriesController@destroy');
Route::get('/admin/categories/edit/{id}','CategoriesController@edit');
Route::post('/admin/categories/update/{id}','CategoriesController@update');

//Sidebar Block
Route::get('/sidebar','SidebarController@index');
Route::get('/sidebar/create','SidebarController@create');
Route::post('/sidebar/save','SidebarController@store');

//Admin authenthication
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');
Route::post('/admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('/admin/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
