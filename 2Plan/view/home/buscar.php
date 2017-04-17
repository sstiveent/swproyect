<section class="search" ng-controller="buscarController" >
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8"><h2 style="text-align: center; margin-bottom: 10px;">Encuentra el Plan ideal para estar con tu pareja</h2></div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="input-group">
				<input type="search" class="form-control" placeholder="Ej: Cena rom&aacute;ntica" ng-model="busqueda">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button" ng-click="buscarPlanes()">Buscar</button>
				</span>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row" style="margin-top: 40px;" ng-init="buscarPlanes(); listarIntereses();">
		<!--- esto se repite desde aca -->
		<h3 style="text-align: center;">{{msj}}</h3>
		<div class="col-md-3" ng-repeat="obj in planes">
			<div class="thumbnail" style="background: url({{obj.img}}); background-size: cover; height: 300px; background-position: center;">
				<!--<img ng-src="{{obj.img}}" alt="imagen" class="img-responsive" style="max-height: 148px;">-->
				<div class="caption" style="margin-top: 148px; background-color: rgba(0,0,0,0.5); color:white;">
					<h4>{{obj.nombrePlan}}</h4>
					<p class="listDescription text-justify">{{obj.descripcion}}</p>
					<p>
						<div class="row">
							<div class="col-xs-6">
								<a href="#!/plan/{{obj.idPlan}}" class="btn btn-primary">Ver</a> 
							</div>
							<div class="col-xs-6">
								<p class="precio text-right" style="color: white;">${{obj.valor}}</p>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
		
		<!-- hasta aca se repite-->
	</div>
</section>