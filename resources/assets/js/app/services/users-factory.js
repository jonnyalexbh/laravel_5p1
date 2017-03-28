/*
* file users-factory.js
*/
angular.module('myApp')
.constant("rootApp", "http://localhost:8000/")
.factory('usersFactory', ['$http', 'rootApp', function ($http, rootApp) {
  var factory = {};
  /*
  * getUsers
  */
  factory.getUsers = function(){
    return $http.get(rootApp + 'users-angularjs');
  };

  return factory;

}]);
