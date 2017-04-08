"use strict";
app.controller('loginController', function ($scope, loginService) {

	$scope.obtenerUrls = function () {


        loginService.obtenerURLGoogle().then(function (response) {
            
            $scope.googleUrl=response.data;
        });

        loginService.obtenerURLFacebook().then(function (response) {

            $scope.facebookUrl=response.data;
        });

    };

});