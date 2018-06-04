<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|user')->group(function(){
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/roles', 'RolesController');
  Route::resource('/permissions', 'PermissionsController');
  Route::resource('/employees', 'EmployeeController');
});

Route::get('/home', 'HomeController@index')->name('home');
