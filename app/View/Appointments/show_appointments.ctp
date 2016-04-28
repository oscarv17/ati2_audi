<div class="container-profile">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>Mis Citas</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<?php if(!empty($appointments)){ ?>
			<table class="table table-bordered">
				<tr>
					<th class="text-center">Tipo</th>
					<th class="text-center">Servicio</th>
					<th class="text-center">Fecha de Solicitud</th>
					<th class="text-center">Estado</th>
				</tr>
				<?php foreach ($appointments as $appointment): ?>
					<tr>
						<td><?php echo ucwords($appointment['Appointment']['name']); ?></td>
						<td><?php echo ucwords(strtolower($appointment['ServiceApp']['name'])); ?></td>
						<td><?php echo ucwords(strtolower($appointment['Appointment']['date'])); ?></td>
						<td><?php echo ucwords(strtolower($appointment['AppointmentStat']['name'])); ?></td>
					</tr>
				<?php endforeach; ?>	
			</table>
			<?php }else{ ?>
				<h2>No tienes Citas pendientes</h2>
			<?php } ?>
		</div>
		<button type="button" class="btn btn-lg btn-red backToProfile">Volver</button>
	</div>
</div>