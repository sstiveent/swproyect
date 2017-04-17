"use strict";
//Controlador del Plan que se maneja en la aplicacion
app.controller("planController", ['$scope','$window','$routeParams','planService',function($scope,$window,$routeParams,planService) {

	$scope.idPlan=$routeParams.idPlan;
	$scope.msj="";
	$scope.obtenerPlan = function () {
		planService.obtenerPlan($scope.idPlan).then(function (response) {
			$scope.plan=response.data;
			console.log($scope.plan)
			if(!$scope.plan.nombrePlan){
				$scope.msj="No hemos encontrado este plan, puede que ya no esté disponible";
			}
			if($scope.plan == "-2"){
				$window.location = "index.php"
			}
		});
	};

}]);