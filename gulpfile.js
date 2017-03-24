var elixir = require('laravel-elixir');

/*
|--------------------------------------------------------------------------
| Elixir Asset Management
|--------------------------------------------------------------------------
|
| Elixir provides a clean, fluent API for defining some basic Gulp tasks
| for your Laravel application. By default, we are compiling the Sass
| file for our application, as well as publishing vendor resources.
|
*/

elixir(function (mix) {
  mix.sass([
    'app.scss'
  ], 'public/css/bootstrap.css');
});

elixir(function (mix) {
  mix.styles([
    'login.css'
  ], 'public/css/login.css');
});

elixir(function (mix) {
  mix.styles([
    'master.css',
    'custom.css'
  ], 'public/css/master.css');
});

elixir(function (mix) {
  mix.scripts([
    'menu.js',
    'application.js'
  ], 'public/js/application.js');
});

elixir(function (mix) {
  mix.scripts([
    'users.js'
  ], 'public/js/users.js');
});

elixir(function (mix) {
  mix.scripts([
    'services/user-service.js'
  ], 'public/js/services/user-service.js');
});

elixir(function (mix) {
  mix.scripts([
    'services/test-factory.js'
  ], 'public/js/services/test-factory.js');
});
