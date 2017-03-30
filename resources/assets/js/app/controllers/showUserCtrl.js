/*
* file showUserCtrl.js
*/
angular.module('myApp').
controller('showUserCtrl', ['$scope', '$routeParams', 'usersService', function($scope, $routeParams, usersService){

  usersService.get({ id: $routeParams.id}, function(data) {
    $scope.user = data;
  });

}]);
