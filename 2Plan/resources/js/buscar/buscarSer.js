"use strict";

app.service('buscarService', function ($http, $httpParamSerializerJQLike) {

this.buscarPlanes = function (busqueda) {       
        var promise = $http({
            method: "post",
            url: "controller/buscarPlanes.php",
            data: $httpParamSerializerJQLike({
                buscar:busqueda,
                idUsuario:1
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {
            return response;
        }, function myError(response) {
            return response;
        });

        /*Luego se retorna la promesa*/
        return promise;
    };


});