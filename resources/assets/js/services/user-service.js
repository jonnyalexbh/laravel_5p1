angular.module('myApp')
.service('testService', function(){
  this.hello= function(text){
    return "Service hello " + text;
  };
  this.helloWorld = function(text){
    return "Service hello world " + text;
  };
});
