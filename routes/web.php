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
Route::get('contacto', 'HomeController@contact');
Route::get('preguntasfrecuentes', 'HomeController@faqs');
Route::get('preciosyplanes', 'HomeController@pricing');

/**
 * Authorization routes
 */
Auth::routes();
//SHOWS VIEWS SUBMENU PERFIL
Route::get('profile/{nombre}', [
  'uses' => 'UserController@edit',
  'as' => 'profile_show_perfil'
]);
Route::get('newsletter/{nombre}', [
  'uses' => 'UserController@newslleter',
  'as' => 'newsletter_show'
]);
Route::get('appointment/{nombre}', [
  'uses' => 'UserController@appointment',
  'as' => 'appointment_show'
]);

//VIEWS CONTROLS
Route::put('user_update', [
  'uses' => 'UserController@update',
  'as' => 'user_update_path'
]);
Route::get('password/email', [
  'uses' => 'Auth\ForgotPasswordController@getEmail',
  'as' => 'password.email_path'
]);
Route::get('imagen_perfil/{id}', [
  'uses' => 'UserController@getPerfil',
  'as' => 'get_perfil_image_path'
]);

/**
 * Punctuation routes
 */
Route::get('calificacion/crear', [
  'uses' => 'PunctuationController@create',
  'as' => 'punctuation_create_path'
]);
Route::post('calificacion/crear', [
  'uses' => 'PunctuationController@store',
  'as' => 'punctuation_create_path'
]);
Route::get('usuario/{id}/calificaciones', [
  'uses' => 'PunctuationController@index',
  'as' => 'user_punctuations_path'
]);

/**
 * Appointment routes
 */
Route::get('cita/crear/{user_id}', [
  'uses' => 'AppointmentController@create',
  'as' => 'appointment_create_path'
]);

Route::get('cita/{id}', [
  'uses' => 'AppointmentController@index',
  'as' => 'appointment_path'
]);

/**
 * Messages routes
 */
Route::get('message/{id}', [
  'uses' => 'MessageController@index',
  'as' => 'to_message_path'
]);
Route::get('user_contact/{id}', [
  'uses' => 'MessageController@show',
  'as' => 'get_user_contact_path'
]);
Route::get('answer/{user_contacted_id}', [
  'uses' => 'MessageController@edit',
  'as' => 'get_answer_path'
]);
Route::post('answer', [
  'uses' => 'MessageController@update',
  'as' => 'answer_update_path'
]);

/**
 * Property routes
 */
Route::get('inmuebles/crear', [
  'uses' => 'PropertyController@create',
  'as' => 'property_create_path'
]);
Route::post('inmuebles/crear', [
  'uses' => 'PropertyController@store',
  'as' => 'property_create_path'
]);
Route::get('inmuebles/{id}/editar', [
  'uses' => 'PropertyController@edit',
  'as' => 'property_edit_path'
]);
Route::put('inmuebles/{id}/editar', [
  'uses' => 'PropertyController@update',
  'as' => 'property_edit_path'
]);
Route::delete('inmuebles/{id}/borrar', [
  'uses' => 'PropertyController@destroy',
  'as' => 'property_delete_path'
]);
Route::get('inmuebles', [
  'uses' => 'PropertyController@index',
  'as' => 'properties_path'
]);
Route::get('inmuebles/{id}', [
  'uses' => 'PropertyController@show',
  'as' => 'property_show_path'
]);
Route::get('inmuebles/buscar', [
  'uses' => 'PropertyController@search',
  'as' => 'property_filter_path'
]);
Route::post('imagen_inmueble/upload', [
  'uses' => 'PropertyImageController@upload',
  'as' => 'property_image_upload_path'
]);
Route::delete('imagen_inmueble/{img}', [
  'uses' => 'PropertyImageController@delete',
  'as' => 'property_image_delete_path'
]);
Route::get('imagen_inmueble/{img}', [
  'uses' => 'PropertyImageController@getImage',
  'as' => 'get_property_image_path'
]);

/**
 * Price plans routes
 */
Route::get('plan/crear', [
  'uses' => 'PricePlanController@create',
  'as' => 'create_price_plan_path'
]);
Route::post('plan/crear', [
  'uses' => 'PricePlanController@store',
  'as' => 'create_price_plan_path'
]);
Route::get('plan/{id}', [
  'uses' => 'PricePlanController@show',
  'as' => 'price_plan_show_path'
]);
Route::get('plan/{id}/editar', [
  'uses' => 'PricePlanController@edit',
  'as' => 'price_plan_edit_path'
]);
Route::put('plan/{id}/editar', [
  'uses' => 'PricePlanController@update',
  'as' => 'price_plan_edit_path'
]);
Route::delete('plan/{id}/borrar', [
  'uses' => 'PricePlanController@destroy',
  'as' => 'price_plan_delete_path'
]);
Route::get('planes', [
  'uses' => 'PricePlanController@index',
  'as' => 'price_plans_path'
]);

/**
 * Project routes
 */
Route::get('crear/proyecto', [
  'uses' => 'ProjectController@create',
  'as' => 'projects_create_path'
]);
Route::post('crear/proyecto', [
  'uses' => 'ProjectController@store',
  'as' => 'projects_create_path'
]);
Route::get('editar/proyecto/{id}', [
  'uses' => 'ProjectController@edit',
  'as' => 'projects_edit_path'
]);
Route::put('editar/proyecto/{id}', [
  'uses' => 'ProjectController@update',
  'as' => 'projects_edit_path'
]);
Route::delete('borrar/proyectos/{id}', [
  'uses' => 'ProjectController@destroy',
  'as' => 'projects_delete_path'
]);
Route::get('/proyectos', [
  'uses' => 'ProjectController@index',
  'as' => 'projects_path'
]);
Route::get('detallesProyecto/{id}', [
  'uses' => 'ProjectController@show',
  'as' => 'projects_show_path'
]);
Route::get('buscar/proyectos', [
  'uses' => 'ProjectController@search',
  'as' => 'project_filter_path'
]);

Route::post('imagen_proyecto/upload', [
  'uses' => 'ProjectImageController@upload',
  'as' => 'project_image_upload_path'
]);
Route::delete('imagen_proyecto/{img}', [
  'uses' => 'ProjectImageController@delete',
  'as' => 'project_image_delete_path'
]);
Route::get('imagen_proyecto/{img}', [
  'uses' => 'ProjectImageController@getImage',
  'as' => 'get_project_image_path'
]);
