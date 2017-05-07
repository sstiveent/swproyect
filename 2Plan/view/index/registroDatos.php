<nav class="navbar navbar-light bg-faded">
    <h1 class="navbar-brand mb-0 title">2plan</h1>
</nav>
<div class="clear"></div>
<div class="container-fluid" style="margin-top: 40px;">
    <h2>Completa tu registro</h2>
    <br><div class="clear"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4 " style="background: white; border-radius: 0.5; color: black; padding:20px; ">
        <form class="form-horizontal" ng-controller="registerDataController" ng-init="listarCiudades();" >
            <div class="form-group" id="groupSelect">
                <label for="inputEmail3" class="col-sm-3 control-label" style="text-align: left;">Ciudad</label>
                <div class="col-sm-9">
                    <select class="form-control" ng-model="idCiudad"  id="select" onChange="comprobarAll(); comprobarSelect();" >
                        <option value="">Seleccione</option>
                        <option ng-repeat="ciudad in ciudades" value="{{ciudad.id}}">{{ciudad.name}}</option>
                    </select>
                </div>
            </div>
            <div class="form-group" id="groupDate">
                <label for="inputPassword3" class="col-sm-3 control-label" style="text-align: left;">Fecha de nacimiento</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="date" onChange="comprobarAll(); comprobarDate();" ng-model="fechaNac">
                </div>
            </div>
            <div class="form-group" id="groupCheck">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="check" onChange="comprobarAll(); comprobarCheck();"> Acepto los <a href="docs/Terminos%20y%20condiciones%20de%20uso.pdf"  target="_blank" style="color: #049a40;">t&eacute;rminos y condiciones</a>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <h5>{{msj}}</h5>
                </div>
                <div class="col-sm-9">
                    <button  id="next" class="btn btn-default" ng-click="registrarDatosPerfil();" disabled>Siguiente</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4"></div>


</div>
<div class="mastfoot">
    <div class="inner">
        <p> <a href="http://2plan.grupodimo.co" style="color: white;">2Plan</a> Todos los derechos reservados &copy; 2017</p>
    </div>
</div>
<script language="JavaScript" type="text/javascript">
    function comprobarAll()
    {   

        if (document.getElementById('check').checked && existeFecha(document.getElementById('date').value) && document.getElementById("select").value >0 && edad(document.getElementById('date').value) > 13){

            document.getElementById('next').disabled = false;
        }
        else{
            document.getElementById('next').disabled = true;
        }
    }
    function comprobarDate()
    {   

        if (existeFecha(document.getElementById('date').value) && edad(document.getElementById('date').value) > 13){
            document.getElementById("groupDate").classList.remove('has-warning');
            document.getElementById("groupDate").classList.add('has-success');
        }
        else{
            document.getElementById("groupDate").classList.remove('has-success');
            document.getElementById("groupDate").classList.add('has-warning');
        }
    }
    function comprobarSelect()
    {   

        if (document.getElementById("select").value >0 ){

            document.getElementById("groupSelect").classList.remove('has-warning');
            document.getElementById("groupSelect").classList.add('has-success');
        }
        else{
            document.getElementById("groupSelect").classList.remove('has-success');
            document.getElementById("groupSelect").classList.add('has-warning');
        }
    }
    function comprobarCheck()
    {   

        if (document.getElementById('check').checked ){

            document.getElementById("groupCheck").classList.remove('has-warning');
            document.getElementById("groupCheck").classList.add('has-success');
        }
        else{
            document.getElementById("groupCheck").classList.remove('has-success');
            document.getElementById("groupCheck").classList.add('has-warning');
        }
    }
    function existeFecha(fecha){
        var fechaf = fecha.split("-");
        var day = fechaf[2];
        var month = fechaf[1];
        var year = fechaf[0];
        var date = new Date(year,month,'0');
        if(day==0 || month ==0 || year == 0)
            return false;
        if((day-0)>(date.getDate()-0)){
            return false;
        }
        return true;
    }
    function edad(fecha){
        fecha = new Date(fecha);
        hoy = new Date();
        ed = parseInt((hoy -fecha)/365/24/60/60/1000);
        return ed;
    }
</script>
