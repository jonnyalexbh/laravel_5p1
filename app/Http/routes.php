<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home routes...

Route::get('/', [
  'uses' => 'LogController@index',
  'as' => 'log_index_path',
]);

Route::match(['get', 'post'], 'home', [
  'uses' => 'HomeController@index',
  'as' => 'home_index_path',
]);

// Login routes...

Route::post('login', [
  'uses' => 'LogController@store',
  'as' => 'log_store_path',
]);

Route::get('logout', [
  'uses' => 'LogController@logout',
  'as' => 'log_logout_path',
]);

// Users routes...

Route::match(['get', 'post'], 'users', [
  'uses' => 'UsersController@index',
  'as' => 'users_index_path',
]);

Route::get('create-post', function () {
  return 'Hello World';
});


Route::get('user/create', [
  'uses' => 'UsersController@create',
  'as' => 'user_create_path',
]);

Route::post('user/create', [
  'uses' => 'UsersController@store',
  'as' => 'user_store_path',
]);

Route::get('user/edit/{id}', [
  'uses' => 'UsersController@edit',
  'as' => 'user_edit_path',
]);

Route::post('user/edit/{id}', [
  'uses' => 'UsersController@update',
  'as' => 'user_update_path',
]);

Route::get('user/destroy/{id}', [
  'uses' => 'UsersController@destroy',
  'as' => 'user_destroy_path',
]);

// Students routes...

Route::get('students', [
  'uses' => 'StudentsController@index',
  'as' => 'student_index_path',
]);

// Roles routes...

Route::match(['get', 'post'], 'roles', [
  'uses' => 'RolesController@index',
  'as' => 'roles_index_path',
]);

Route::post('role/create', [
  'uses' => 'RolesController@store',
  'as' => 'role_store_path',
]);

Route::post('role/create/ajax', [
  'uses' => 'RolesController@storeAjax',
  'as' => 'role_storeAjax_path',
]);

// Permission routes...

Route::get('perms/assigned', [
  'uses' => 'PermisosController@permsAssigned',
  'as' => 'permission_assigned_path',
]);

Route::post('perms/assign', [
  'uses' => 'PermisosController@assign',
  'as' => 'permission_assign_path',
]);

Route::delete('perms/remove', [
  'uses' => 'PermisosController@remove',
  'as' => 'permission_remove_path',
]);

// Genders routes...

Route::match(['get', 'post'], 'catalogs/genders', [
  'uses' => 'CatalogsController@getGenders',
  'as' => 'genders_index_path',
]);

Route::get('catalogs/create', [
  'uses' => 'CatalogsController@createGender',
  'as' => 'gender_create_path',
]);

Route::post('catalogs/create', [
  'uses' => 'CatalogsController@storeGender',
  'as' => 'gender_create_path',
]);

Route::get('catalogs/edit/{id}', [
  'uses' => 'CatalogsController@editGender',
  'as' => 'gender_edit_path',
]);

Route::post('catalogs/update/{id}', [
  'uses' => 'CatalogsController@updateGender',
  'as' => 'gender_update_path',
]);

Route::get('catalogs/destroy/{id}', [
  'uses' => 'CatalogsController@destroyGender',
  'as' => 'gender_destroy_path',
]);

// document type routes...

Route::match(['get', 'post'], 'catalogs/documentype', [
  'uses' => 'CatalogsController@getDocumentype',
  'as' => 'documentype_index_path',
]);

Route::get('catalogs/create/documentype', [
  'uses' => 'CatalogsController@createDocumentype',
  'as' => 'documentype_create_path',
]);

Route::post('catalogs/create/documentype', [
  'uses' => 'CatalogsController@storeDocumentype',
  'as' => 'documentype_create_path',
]);

// test entrust...

Route::group(['middleware' => 'auth'], function () {

  Route::get('people', function ()    {

    if(Auth::user()->hasRole('admin'))
    {
      return "Bien admin";
    }

  });

  Route::get('people2', function () {
    if(Auth::user()->hasRole('limitado'))
    {
      return "Bien limitado";
    }
  });

});


Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']],  function () {
  Route::get('people', function ()    {
    return "Hola jonny";
  });
});

// Test routes...

Route::get('simple', function() {
  echo "Simple prueba !!";
});

Route::get('retorna', function() {
  return 'Retorna prueba !!';
});

Route::get('parametros/{id}/{name}', function($id, $name) { /* ruta con parametros */
  return 'Recibimos parametros Id: ' . $id . ' Nombre: ' . $name;
});

Route::get('paramtnull/{name?}', function($name = null) { /* ruta con parametros opcionales */
  return 'Nombre empleado: ' . $name;
});

Route::get('where/{id}', function($id) { /* ruta con parametros y where */
  return 'Empleado: ' . $id;
})->where('id', '[0-9]+');

Route::match(['get', 'post'], 'dosMetodos', function () {
  return 'match permite POST/GET';
});

Route::any("testAll", function() {
  echo 'La ruta /cualquiercosa asociada a cualquier verbo';
});




Route::get('test/route', function() {
  // código a ejecutar cuando se produzca esa ruta y el verbo
  return 'retorna verbo get';
});

Route::post('test/route', function() {
  return 'retorna verbo post';
});

Route::put('test/route', function() {
  return 'retorna verbo put';
});

Route::delete('test/route', function() {
  return 'retorna verbo delete';
});



Route::get('vista', function() { /* retorna vista */
  return view('test/index');
});

Route::get('vistaBlade', function() { /* retorna vista blade */
  return view('test/blade-test');
});

Route::get('languageExito', function() { /* retorna una vista con parametros */
  return view('test/parameter', ['exito' => 'Total']);
});

Route::get('language', function() { /* retorna una vista con parametros */
  $data = ['lenguajes' => 'PHP, Java, Python', 'exito' => '1'];
  return view('test/parameter', $data);
});



Route::get('controllerIndex', 'TestController@index');              /* Al controllerIndex */

Route::get('aliasController', [
  'uses' => 'TestController@index',
  'as' => 'alias_index_path',
]);

Route::get('mostrar/{id}', [
  'uses' => 'TestController@show',
  'as' => 'mostrar_show_path',
  ])->where('id', '[0-9]+');
