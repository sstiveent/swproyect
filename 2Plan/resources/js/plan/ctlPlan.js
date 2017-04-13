"use strict";
//Controlador del Plan que se maneja en la aplicacion
app.controller("planController", ["$scope","$routeParams",function($scope,$routeParams,PlanService) {

	$scope.idPlan="idPlan='" + $routeParams.idPlan + "'";

	$scope.obtenerDatos = function () {
		planService.obtenerPlan($scope.idPlan).then(function (response) {
			console.log(response);
			$scope.Plan=response.data;

		});
	};

}]);