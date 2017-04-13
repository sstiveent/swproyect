"use strict";
//Servicio que maneja el "Plan"
app.service('planService', function ($http, $httpParamSerializerJQLike) {



	this.obtenerPlan = function (idPlan) {       

        var promise = $http({
            method: "post",
            url: "controller/obtenerPlan",
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