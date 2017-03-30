/*
* file app-users.js
*/
angular.module('myApp', ['ngRoute', 'ngResource'])  // creating the module
.constant("base_api", "/api")
.config(['$routeProvider', function ($routeProvider) {

  $routeProvider.when("/", {redirectTo:"/index"});  // route configuration

  $routeProvider.when("/index", {
    controller: "usersCtrl",
    templateUrl: "/app/views/index.html"
  });

  $routeProvider.when("/index/create", {
    controller: "createUserCtrl",
    templateUrl: "/app/views/create.html"
  });

  $routeProvider.otherwise("/index");

}]);
