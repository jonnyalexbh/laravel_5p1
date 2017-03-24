angular.module('myApp', [])
.controller('myCtrl', ['$scope', 'testService', 'testFactory', function ($scope, testService, testFactory) {
  $scope.name = "Hola mundooooooooooooo";
  $scope.dataServiceHello = testService.hello('jonny');
  $scope.dataServiceHelloWorld = testService.helloWorld('jonny');
  $scope.factoryTest= testFactory.getCustomers();
  console.log($scope.factoryTest);
}]
);

//# sourceMappingURL=users.js.map
