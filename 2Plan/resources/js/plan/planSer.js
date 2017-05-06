"use strict";
//Servicio que maneja el "Plan"
app.service('planService', function ($http, $httpParamSerializerJQLike) {


	this.obtenerPlan = function (idPlan) {       

        var promise = $http({
            method: "post",
            url: "controller/obtenerPlan.php",
            data: $httpParamSerializerJQLike({
                idPlan:idPlan
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

    this.obtenerComentarios = function (idPlan) {       

        var promise = $http({
            method: "post",
            url: "controller/obtenerComentarios.php",
            data: $httpParamSerializerJQLike({
                idPlan:idPlan
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

    this.comentar = function (idPlan, comentario) {       

        var promise = $http({
            method: "post",
            url: "controller/comentarPlan.php",
            data: $httpParamSerializerJQLike({
                idPlan:idPlan,
                comentario:comentario
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

    this.calificar = function (idPlan, calificacion) {       

        var promise = $http({
            method: "post",
            url: "controller/calificarPlan.php",
            data: $httpParamSerializerJQLike({
                idPlan:idPlan,
                calificacion:calificacion
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

    this.obtenerMiCalificacion = function (idPlan) {       

        var promise = $http({
            method: "post",
            url: "controller/obtenerCalificacionUsuario.php",
            data: $httpParamSerializerJQLike({
                idPlan:idPlan
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };
});