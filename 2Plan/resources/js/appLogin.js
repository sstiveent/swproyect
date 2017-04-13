"use strict";
var app = angular.module("appLogin", ['ngRoute', 'ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider
             .when('/Register/1', {
                controller: 'registerDataController',
                templateUrl: 'view/index/registroDatos.php'
            })
             .when('/Register/2', {
                controller: 'registerIntController',
                templateUrl: 'view/index/resgistroInteres.php'
            })
              .when('/', {
                controller: 'loginController',
                templateUrl: 'view/index/login.php'
            })
            .otherwise({
                redirectTo: '/'
            });

});


app.controller('registerDataController', function($scope) {
    $scope.pageClass = 'dataRegister';
});

app.controller('registerIntController', function($scope) {
    $scope.pageClass = 'interestRegister';
});