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
