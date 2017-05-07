<?php session_start();?>
<section class="plan center-block" ng-controller="planController" ng-init="obtenerPlan(); obtenerMiCalificacion(); obtenerComentarios();">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <h3 style="text-align: center">{{msj}}</h3>
                <div class="row center-block" ng-if="plan.nombrePlan != null" style="margin-top:15px;">
                    <div class="col-md-4">
                        <img ng-src="{{plan.img}}" class="img-responsive center-block" alt="{{plan.alt}}" style="width: 100%; max-height: 300px;">
                        <div ng-if="plan.calificacion != null && plan.calificacion.length >0">
                            <span style="color: #00d0bc; font-size: 24px;" ng-repeat="obj in plan.calificacion track by $index">&#9733;</span> <span>({{plan.cantidadVotos}}) votos</span>
                        </div> 
                    </div>
                    <div class="col-md-8 center-block" >
                        <table border="0">
                            <tr>
                                <th><h2 style="margin-top: 0px;">{{plan.nombrePlan}}</h2></th>
                            </tr>
                            <tr>
                                <th>{{plan.descripcion}}</th>

                            </tr>
                            <tr>
                                <th><h4>&#36;{{plan.valor  | number:0}}</h4></th>
                            </tr>

                            <tr>
                                <td>{{plan.nombreEstablecimiento}}</td>
                            </tr>
                            <tr>
                                <td>{{plan.direccion}}</td>
                            </tr>
                            <tr>
                                <td>{{plan.email}}</td>
                            </tr>
                            <tr>
                                <th>
                                    <span id="rate">Calificar</span>
                                    <div class="ec-stars-wrapper">

                                        <a ng-repeat="obj in miCalificacion" href="" data-value="{{obj.value}}" title="Votar con {{obj.value}} estrellas" ng-click="calificar(obj.value)" class="{{obj.class}}">&#9733;</a>


                                    </div>
                                </th>
                            </tr>	
                        </table>
                    </div>
                </div>
                <hr width=50% align="center" style="margin-top: 10px;" >
                <div class="row">

                    <div class="col-md-10" id="textarea">
                        <textarea style="width: 100%;"  id="comentario" rows="3" name="comentario" minlength="3" maxlength="140" placeholder="Cu&eacute;ntanos como te parece este sitio"  ng-model="comentario" required="true" onchange="comprobarComentario();" onkeyup="comprobarComentario();"></textarea>
                    </div>

                    <div class="col-md-2"></div>
                    <button  id="btnComentar" class="btn btn-default" title="Debes escribir m&aacute;s de 3 letras" ng-click="comentar(); comprobarComentario();" disabled>Comentar</button>
                </div>
                <div ng-if="comentarios.length >0">
                    <table class="table table-responsive table-hover" >
                        <tr ng-repeat="obj in comentarios">
                            <th width="20%">{{obj.nombre}}</th>
                            <td width="80%">{{obj.comentario}}</td>
                        </tr>
                    </table>
                </div>

            </div>
            <a class="btn btn-default" href="#!/" role="button">Atras</a>
        </div>

        <div class="col-md-1"></div>

    </div>
</div>

</section>
<script type="text/javascript">
    function comprobarComentario()
    {   

        if (document.getElementById('comentario').value.length > 3){

            document.getElementById("comentario").classList.remove('has-warning');
            document.getElementById("comentario").classList.add('has-success');
            document.getElementById("btnComentar").disabled = false;
            document.getElementById("btnComentar").title = "Comentar";
        }
        else{
            document.getElementById("comentario").classList.remove('has-success');
            document.getElementById("comentario").classList.add('has-warning');
            document.getElementById("btnComentar").disabled = true;
            document.getElementById("btnComentar").title = "Debes escribir m&aacute;s de 3 letras";
        }
    }
</script>