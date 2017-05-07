"use strict";
app.service('registerDataService', function ($http, $httpParamSerializerJQLike) {

	this.registrarDatosPerfil = function (idCiudad, fechaNac) {       

        var promise = $http({
            method: "post",
            url: "controller/registrarDatosPrefil.php",
            data: $httpParamSerializerJQLike({
                idCiudad:idCiudad,
                fechaNac:fechaNac
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };


    this.listarCiudades = function () {       

        var promise = $http({
            method: "post",
            url: "controller/listarCiudades.php",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

});