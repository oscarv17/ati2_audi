<div class="container-services">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1>Servicios</h1>
			<p>En esta secci&oacute;n puedes consultar los servicios ofrecidos por el consecionario</p>
		</div>
	</div>
	<div class="row service-list padding-top text-center">		
	<?php foreach ($services as $k => $service): ?>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="thumbnail">
	     		 <img src="/img/servicios/<?php echo $service['ServiceImage']['name']; ?>">
	     		 <div class="caption">
	       		 <h3><?php echo ucwords(strtolower($service['Service']['name'])); ?></h3>
	     	</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>