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

/*
* file users-factory.js
*/
angular.module('myApp')
.factory('usersService', ['$resource',  function($resource) {
  return $resource('/api/users/:id');
}]);

/*
* file usersCtrl.js
*/
angular.module('myApp').controller("usersCtrl", function($scope, usersService){
  $scope.title = "Usuarios AngularJs";
  $scope.users = [];
  $scope.users = usersService.query();
});

/*
* file createUserCtrl.js
*/
angular.module('myApp')
.controller('createUserCtrl', ['$scope', '$location', 'usersService', function($scope, $location, usersService){
  $scope.title = "Crear usuario";
  $scope.disable_submit = false;

  $scope.user = {
    name:"",
    email:"",
    password:"",
    is_lock: 0
  };

  $scope.save = function(){
    $scope.disable_submit = true;
    usersService.save($scope.user);
    $location.path("/");
  }

}]);

//# sourceMappingURL=users-angular.js.map
