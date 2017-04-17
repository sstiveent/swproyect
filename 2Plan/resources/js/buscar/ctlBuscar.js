"use strict";
app.controller('buscarController', function ($scope, $window, $timeout, buscarService) {

	$scope.buscarPlanes=function(busqueda){
		buscarService.buscarPlanes($scope.busqueda).then(function(response){
			$scope.planes=response.data;
			if($scope.planes ==""){
				$scope.msj="No encontramos planes para ti, intenta con otra busqueda";
			}
			if($scope.planes =="-2"){
				$window.location = "index.php";
			}
			console.log(response);
		});
	}
	
});