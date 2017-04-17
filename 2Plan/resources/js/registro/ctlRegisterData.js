app.controller('registerDataController', function($scope,$window,registerDataService) {
	$scope.pageClass = 'page dataRegister';
	//$scope.idCiudad.type = $scope.typeOptions[0].value;
	$scope.idCiudad=null;

	$scope.registrarDatosPerfil = function () {
		registerDataService.registrarDatosPerfil($scope.idCiudad, $scope.fechaNac).then(function (response) {
			console.log(response);
			if(response.data =="1"){
				$window.location.href = '#!/2';
			}
			if(response.data =="0"){
				$scope.msj="Error al enviar los datos";
			}
			if(response.data =="-1"){
				$scope.msj="Error en el registro";
			}
			if(response.data =="-3"){
				$scope.msj="Debe ser mayor de 13";
			}
			if(response.data =="-2"){
				$scope.msj="Acceso no autorizado";
				$window.location = "index.php";
			}
		});
	};

	$scope.listarCiudades = function () {
		registerDataService.listarCiudades().then(function (response) {
			$scope.ciudades=response.data;
			console.log(response);
			

		});
	};

});