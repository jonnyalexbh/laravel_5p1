angular.module('myApp')
.constant("rootApp", "http://localhost:8000/")
.factory('testFactory', function ($http, rootApp) {
  var factory = {};
  var customers = [
    { name : 'Steve Jobs', city : 'San Francisco' },
    { name : 'Bill Gates', city : 'Medina' },
    { name : 'Mark Zuckerberg', city : 'Palo Alto' },
    { name : 'Lucy the Samoyed', city : 'Governador Valadares' },
    { name : 'William Oliveira', city : 'Governador Valadares' },
    { name : 'Juliana Oliveira', city : 'Governador Valadares' }
  ];

  factory.getCustomers = function () {
    return customers;
  }
  /*
  * getUsers
  */
  factory.getUsers = function(){
    return $http.get(rootApp + 'users-angularjs');
  };

  return factory;

});

//# sourceMappingURL=test-factory.js.map
