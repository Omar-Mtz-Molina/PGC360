var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
	cfpLoadingBarProvider.spinnerTemplate = '<div class="loader"></div>';
}]);

app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl : 'inicio',
    controller  : ''
  })
  .otherwise({redirectTo: '/'});
});