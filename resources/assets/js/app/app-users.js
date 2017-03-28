/*
* file app-users.js
*/
angular.module('myApp', ['ngRoute'])  // creating the module
.config(['$routeProvider', function ($routeProvider) {

  $routeProvider.when("/", {redirectTo:"/index"});  // route configuration

  $routeProvider.when("/index", {
    controller: "usersCtrl",
    templateUrl: "/app/views/index.html"
  });
  
  $routeProvider.when("/index/create", {
    templateUrl: "/app/views/create.html"
  });

  $routeProvider.otherwise("/index");

}]);
