<section class="plan center-block" ng-controller="planController" ng-init="obtenerPlan();">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<h3 style="text-align: center">{{msj}}</h3>
				<div class="row center-block" ng-if="plan.nombrePlan != null" style="margin-top:15px;">
					<div class="col-md-4">
						<img ng-src="{{plan.url}}" class="img-responsive center-block" alt="{{plan.alt}}" style="width: 100%; max-height: 300px;">
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
									<th><h4>&#36;{{plan.valor}}</h4></th>
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
							</table>
						</div>
					</div>
					<a class="btn btn-default" href="#!/" role="button">Atras</a>
				</div>

				<div class="col-md-1"></div>

			</div>
		</div>

	</section>