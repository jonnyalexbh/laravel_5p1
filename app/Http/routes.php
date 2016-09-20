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

Route::get('/', function () {
    return view('login');
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
