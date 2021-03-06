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
/*
* app angularjs users
*/
elixir(function (mix) {
  mix.scripts([
    'app/app-users.js',
    'app/services/users-services.js',
    'app/controllers/usersCtrl.js',
    'app/controllers/showUserCtrl.js',
    'app/controllers/createUserCtrl.js',
    'app/controllers/editUserCtrl.js'
  ], 'public/app/users-angular.js');
});
