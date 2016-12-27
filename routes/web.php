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
Route::get('profile', [
    'uses' => 'Auth\User@profile',
    'as' => 'profile_show_perfil'
]);

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
Route::post('images/upload', [
    'uses' => 'PropertyImageController@upload',
    'as' => 'property_image_upload_path'
]);

/**
 * Project routes
 */
Route::get('projects/crear', [
    'uses' => 'ProjectController@create',
    'as' => 'projects_create_path'
]);
Route::post('projects/crear', [
    'uses' => 'ProjectController@store',
    'as' => 'projects_create_path'
]);
Route::get('projects/{id}/editar', [
    'uses' => 'ProjectController@edit',
    'as' => 'projects_edit_path'
]);
Route::put('projects/{id}/editar', [
    'uses' => 'ProjectController@edit',
    'as' => 'projects_edit_path'
]);
Route::delete('projects/{id}/borrar', [
    'uses' => 'ProjectController@destroy',
    'as' => 'projects_delete_path'
]);

Route::get('projects', [
    'uses' => 'ProjectController@index',
    'as' => 'projects_path'
]);

Route::get('project/{id}', [
    'uses' => 'ProjectController@show',
    'as' => 'projects_show_path'
]);
