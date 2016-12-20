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

Auth::routes();

Route::get('/', 'HomeController@index');

//
Route::get('inmueble/crear', [
    'uses' => 'PropertyController@create',
    'as' => 'property_create_path'
]);
Route::post('inmueble/crear', [
    'uses' => 'PropertyController@store',
    'as' => 'property_create_path'
]);
//
Route::get('inmuebles', [
    'uses' => 'PropertyController@index',
    'as' => 'properties_path'
]);
Route::get('inmueble/{id}', [
    'uses' => 'PropertyController@show',
    'as' => 'property_show_path'
]);
//
Route::get('/projects', [
    'uses' => 'ProjectController@index',
    'as' => 'projects_path'
]);
