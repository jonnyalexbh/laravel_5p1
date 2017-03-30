/*
* file usersCtrl.js
*/
angular.module('myApp').controller("usersCtrl", ['$scope', '$location', 'usersService', function($scope, $location, usersService){
  $scope.title = "Usuarios AngularJs";
  $scope.users = [];
  $scope.users = usersService.query();

  $scope.remove = function(id){
    usersService.delete({ id: id });
    $location.path("/");
  }

}]);
