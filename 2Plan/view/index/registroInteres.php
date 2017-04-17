<nav class="navbar navbar-light bg-faded">
	<h1 class="navbar-brand mb-0 title">2plan</h1>
</nav>
<div class="clear"></div>
<div class="container-fluid" style="margin-top: 50px;">
	<h2>Elige tus intereses</h2>
	<br><div class="clear"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4 " style="background: white; border-radius: 0.5; color: black; padding:20px;" >
		<form class="form-horizontal" ng-controller="registerIntController" ng-init="listarIntereses();">
			<div class="row">
				<div class="col-md-6" ng-repeat="obj in listaIntereses" style="text-align: left;" >
					<input type='checkbox' name='{{obj.nombre}}' id="{{obj.nombre}}"  ng-model="intereses[obj.id]" />
					<label for="{{obj.nombre}}">
						<!--<img style="width: 100%;" ng-src="{{obj.url}}" class="img-responsive img-thumbnail intereses" alt="{{alt}}">-->{{obj.nombre}}
					</label> 
				</div>
			</div>	
			<div class="row">
				<div class="form-group">
					<div class="col-sm-3">
						<h5>{{msj}}</h5>
					</div>
					<div class="col-sm-9">
						<button  id="next" class="btn btn-default" ng-click="registrarIntereses();">Siguiente</button>
					</div>
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
