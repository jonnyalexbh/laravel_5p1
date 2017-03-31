/*
* file users-factory.js
*/
angular.module('myApp')
.factory('usersService', ['$resource',  function($resource) {
  return $resource('/api/users/:id', null, {
    'update': { method:'PUT' }
  });
}]);
