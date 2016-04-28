<div class="container-profile">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1>Bienvenido, <?php echo $userName['User']['name']; ?></h1>
		</div>
	</div>
	<div class="row">
		<?php if(!empty($userVehicle)){ ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Mi Veh&iacute;culo:</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img class="img-responsive img-thumbnail" id="imgProfile" src="/img/<?php echo $userVehicle['VehicleImage']['name']; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Audi <?php echo $userVehicle['VehicleUser']['model']; ?></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<button type="button" class="btn btn-lg btn-red" id="makeAppoint">Pedir Cita</button>
				</div>
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<button type="button" class="btn btn-lg btn-red" id="showAppoint">Mis Citas</button>
				</div>
			</div>
		</div>
		<?php }else{ ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Debes Seleccionar tu modelo de autom&oacute;vil</h3>
			<span>Para solicitar una cita, debes antes darnos informaci&oacute;n de tu veh&iacute;culo</span>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="form-group">
				  		<label for="vehiculo">Modelo:</label>
				  		<select class="form-control" id="vehiculoUsuario">
				  			<option>Seleccionar...</option>
				   			<?php foreach($vehicles as $vehicle): ?>
				   				<option value="<?php echo $vehicle['Vehicle']['id'] ?>"><?php echo $vehicle['Vehicle']['model'] ?></option>
				   			<?php endforeach; ?>
				  		</select>
					</div>
					<button type="button" class="btn btn-lg btn-red" id="selectCar">Seleccionar</button>
				</div>
			</div>
		</div>
		<?php } ?>	
	</div>

</div>