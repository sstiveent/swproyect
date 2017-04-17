"use strict";
var app = angular.module("appRegister", ['ngRoute', 'ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider
             .when('/1', {
                controller: 'registerDataController',
                templateUrl: 'view/index/registroDatos.php'
            })
             .when('/2', {
                controller: 'registerIntController',
                templateUrl: 'view/index/registroInteres.php'
            })
            .otherwise({
                redirectTo: '/1'
            });

});

