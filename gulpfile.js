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
    'master.css'
  ], 'public/css/master.css');
});

elixir(function (mix) {
  mix.scripts([
    'menu.js'
  ], 'public/js/menu.js');
});
