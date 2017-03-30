/*
* file usersCtrl.js
*/
angular.module('myApp').controller("usersCtrl", function($scope, usersService){
  $scope.title = "Usuarios AngularJs";
  $scope.users = [];
  $scope.users = usersService.query();
});
