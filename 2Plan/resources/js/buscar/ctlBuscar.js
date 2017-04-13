"use strict";
app.controller('buscarController', function ($scope, $window, $timeout, buscarService) {

	$scope.buscarPlanes=function(busqueda){
		buscarService.buscarPlanes($scope.busqueda).then(function(response){
			$scope.planes=response.data;
			console.log(response);
		});
	}

});