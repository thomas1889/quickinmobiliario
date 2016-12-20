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

Route::get('/', 'HomeController@index');

/**
 * Authorization routes
 */
Auth::routes();

/**
 * Property routes
 */
Route::get('inmueble/crear', [
    'uses' => 'PropertyController@create',
    'as' => 'property_create_path'
]);
Route::post('inmueble/crear', [
    'uses' => 'PropertyController@store',
    'as' => 'property_create_path'
]);
Route::get('inmueble/{id}/editar', [
    'uses' => 'PropertyController@edit',
    'as' => 'property_edit_path'
]);
Route::put('inmueble/{id}/editar', [
    'uses' => 'PropertyController@update',
    'as' => 'property_edit_path'
]);
Route::delete('inmueble/{id}/borrar', [
    'uses' => 'PropertyController@destroy',
    'as' => 'property_delete_path'
]);
Route::get('inmuebles', [
    'uses' => 'PropertyController@index',
    'as' => 'properties_path'
]);
Route::get('inmueble/{id}', [
    'uses' => 'PropertyController@show',
    'as' => 'property_show_path'
]);

/**
 * Project routes
 */
Route::get('/projects', [
    'uses' => 'ProjectController@index',
    'as' => 'projects_path'
]);
