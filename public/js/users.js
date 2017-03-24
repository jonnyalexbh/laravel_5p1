angular.module('myApp', [])
.controller('myCtrl', ['$scope', 'testService', function ($scope, testService) {
  $scope.name = "Hola mundooooooooooooo";
  $scope.dataServiceHello = testService.hello('jonny');
  $scope.dataServiceHelloWorld = testService.helloWorld('jonny');
  console.log($scope.data);
}]
);

//# sourceMappingURL=users.js.map
