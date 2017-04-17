"use strict";
app.service('registerIntService', function ($http, $httpParamSerializerJQLike) {

	this.registrarIntereses  = function (intereses) {       

        var promise = $http({
            method: "post",
            url: "controller/registrarIntereses.php",
            data: $httpParamSerializerJQLike({
                intereses:intereses
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };


    this.listarIntereses = function () {       

        var promise = $http({
            method: "post",
            url: "controller/listarInteresesAll.php",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

});