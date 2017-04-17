"use strict";
app.controller('registerIntController', function($scope,$window,registerIntService) {
	$scope.pageClass = 'page interestRegister';
	$scope.intereses = [];
	$scope.interesesRegistro = [];

	$scope.registrarIntereses = function () {
		$scope.interesesRegistro = [];
		for (var i in $scope.intereses) {
			$scope.interesesRegistro.push({idInteres: i, estado: $scope.intereses[i]}); 
		}
		registerIntService.registrarIntereses($scope.interesesRegistro).then(function (response) {
			console.log(response);
			if(response.data =="1"){
				$window.location.href = 'home.php';
			}
			if(response.data =="0"){
				$scope.msj="Error al enviar los datos";
			}
			if(response.data =="-1"){
				$scope.msj="Error en el registro";
			}
			if(response.data =="-3"){
				$scope.msj="Debe seleccionar al menos un interes";
			}
			if(response.data =="-2"){
				$scope.msj="Acceso no autorizado";
				$window.location = "index.php";
			}
		});
	}

	$scope.listarIntereses = function () {
		registerIntService.listarIntereses().then(function (response) {
			$scope.listaIntereses=response.data;
		});
	};
});