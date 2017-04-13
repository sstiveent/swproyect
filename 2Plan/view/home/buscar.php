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
	<div class="row" style="margin-top: 40px;" ng-init="buscarPlanes();">
		<!--- esto se repite desde aca -->
		<div class="col-md-3" ng-repeat="obj in planes">
			<div class="thumbnail">
				<img src="http://www.europlayas.es/static/81609.JPG" alt="imagen" class="img-responsive">
				<div class="caption">
					<h4>{{obj.nombreEstablecimiento}}</h4>
					<p class="listDescription text-justify">{{obj.descripcion}}</p>
					<p>
						<div class="row">
							<div class="col-xs-6">
								<a href="#!/plan/{{obj.idPlan}}" class="btn btn-primary">Ver</a> 
							</div>
							<div class="col-xs-6">
								<p class="precio text-right">${{obj.valor}}</p>
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
		
		<!-- hasta aca se repite-->
	</div>
</section>