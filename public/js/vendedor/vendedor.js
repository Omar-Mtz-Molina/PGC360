var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
	cfpLoadingBarProvider.spinnerTemplate = '<div class="loader"></div>';
}]);

app.config(function($routeProvider){
  $routeProvider
  .when('/', {
    templateUrl : 'inicio',
    controller  : 'VendedorController'
  })
  .when('/pedido', {
    templateUrl : 'pedido',
    controller  : 'PedidosController'
  })
  .otherwise({redirectTo: '/'});
});

app.controller("VendedorController",function($scope, $http){
  $scope.vendedor = [];
  $http.get("getVendedor")
    .then(function(data){
      //console.log(data);
      $scope.vendedor = data.data;
    },
    function(err){
      console.log(err);
  });
}); //fin de controller

app.controller("PedidosController",function(){
}); //fin de controller