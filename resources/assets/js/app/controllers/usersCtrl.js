/*
* file usersCtrl.js
*/
angular.module('myApp')
.controller("usersCtrl", ['$scope', 'usersFactory', function($scope, usersFactory){
  usersFactory.getUsers()
  .then(function mySucces(response) {
    $scope.data = response.data;
  }, function myError(response) {
    $scope.data = response.statusText;
  });
}]);
