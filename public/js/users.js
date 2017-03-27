angular.module('myApp', [])
.controller('myCtrl', ['$scope', 'testFactory', function ($scope, testFactory) {
  testFactory.getUsers()
  .then(function mySucces(response) {
    $scope.data = response.data;
  }, function myError(response) {
    $scope.data = response.statusText;
  });
}]
);

//# sourceMappingURL=users.js.map
