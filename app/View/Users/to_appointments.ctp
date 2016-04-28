<div class="container-profile">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1>Pedir Citas</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<span>Selecciona el servicio que deseas realizar a tu veh&iacute;culo</span>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="form-group">
				  		<label for="vehiculo">Servicio:</label>
				  		<select class="form-control" id="servicioUsuario">
				  			<option>Seleccionar...</option>
				   			<?php foreach($services as $service): ?>
				   				<option value="<?php echo $service['Service']['id'] ?>"><?php echo ucwords(strtolower($service['Service']['name'])); ?></option>
				   			<?php endforeach; ?>
				  		</select>
					</div>
					<button type="button" class="btn btn-lg btn-red" id="selectService">Seleccionar</button>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<img src="/img/a8.jpg" class="img-responsive img-thumbnail">
		</div>
	</div>
</div>