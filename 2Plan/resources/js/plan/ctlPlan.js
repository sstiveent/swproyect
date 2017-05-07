"use strict";
//Controlador del Plan que se maneja en la aplicacion
app.controller("planController", ['$scope','$window','$routeParams','planService',function($scope,$window,$routeParams,planService) {

	$scope.idPlan=$routeParams.idPlan;
	$scope.msj="";
	$scope.obtenerPlan = function () {
		planService.obtenerPlan($scope.idPlan).then(function (response) {
				
			$scope.plan=response.data.plan;
			if(!$scope.plan.nombrePlan){
				$scope.msj="No hemos encontrado este plan, puede que ya no esté disponible";
			}else if($scope.plan == "-2"){
				$window.location = "index.php"
			}else{
				$scope.plan.cantidadVotos=response.data.calificacion.totalVotos;
				$scope.plan.calificacion=response.data.calificacion.totalVotos >0 ?response.data.calificacion.estrellas:""; 
			}
		});
	};

	$scope.obtenerMiCalificacion = function () {
		planService.obtenerMiCalificacion($scope.idPlan).then(function (response) {
			$scope.miCalificacion=response.data;
		});
	};
	$scope.obtenerComentarios = function () {
		planService.obtenerComentarios($scope.idPlan).then(function (response) {
			$scope.comentarios=response.data;
		});
	};


	$scope.comentar = function () {
		if($scope.comentario != ""){
			planService.comentar($scope.idPlan, $scope.comentario).then(function (response) {
				if(response.data == 1){
					$scope.comentario = "";
					$scope.obtenerComentarios();
				}
			});
		}
	};


	$scope.calificar = function (calificacion) {
		planService.calificar($scope.idPlan, calificacion).then(function () {
			$scope.obtenerMiCalificacion();
			$scope.obtenerPlan();
			
		});
	};



}]);