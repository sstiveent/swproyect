"use strict";
var app = angular.module("appHome", ['ngRoute']);

app.config(function ($routeProvider) {
    $routeProvider
            .when('/plan/:idplan', {
                controller: 'planController',
                templateUrl: 'view/home/plan.php'
            })
             .when('/', {
                controller: 'buscarController',
                templateUrl: 'view/home/buscar.php'
            })
            .otherwise({
                redirectTo: '/'
            });

});
