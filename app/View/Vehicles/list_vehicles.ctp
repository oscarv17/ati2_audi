<div class='container-store'>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>Cat&aacute;logo</h1>
		</div>	
	</div>
	<div class="row vehicle-list padding-top text-center">		
	<?php foreach ($vehicles as $k => $vehicle): ?>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="thumbnail">
	     		 <img src="/img/<?php echo $vehicle['VehicleImage']['name'] ?> ">
	     		 <div class="caption">
	       		 <h3><?php echo $vehicle['Vehicle']['model'] ?></h3>
	     	</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
	
</div>