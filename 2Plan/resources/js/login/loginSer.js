"use strict";

//Servicio que maneja el Login de aplicativo

app.service('loginService', function ($http) {



	this.obtenerURLGoogle = function () {       

        var promise = $http({
            method: "post",
            url: "controller/login/urlGoogle.php",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

    this.obtenerURLFacebook = function () {       

        var promise = $http({
            method: "post",
            url: "controller/login/urlFacebook.php",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}

        }).then(function mySucces(response) {

            return response;

        }, function myError(response) {

            return response;

        });
        return promise;

    };

});