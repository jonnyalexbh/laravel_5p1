/*
* file editUserCtrl.js
*/
angular.module('myApp')
.controller('editUserCtrl', ['$scope', '$routeParams', '$location', 'usersService', function ($scope, $routeParams, $location, usersService) {
  $scope.title = "Editar usuario";
  usersService.get({ id: $routeParams.id}, function(data) {
    $scope.user = data;
  });

  $scope.save = function(){
    usersService.update({ id : $routeParams.id}, $scope.user);
    $location.path("/");
  }
  
}]);
