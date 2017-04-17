"use strict";
//Controlador del Inicio de sesion del aplicativo, por medio de una cuenta del aplicativo, con Facebook o con google
app.controller('loginController', function ($scope, loginService) {
	$scope.obtenerUrls = function () {
		loginService.obtenerURLGoogle().then(function (response) {
			console.log(response);
			$scope.googleUrl=response.data;

		});

		loginService.obtenerURLFacebook().then(function (response) {
			console.log(response);
			$scope.facebookUrl=response.data;
		});

	};

});