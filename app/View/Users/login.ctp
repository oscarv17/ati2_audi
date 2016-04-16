<div class="container-login">
	<div class="row">
		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
			<h2>Iniciar Sesi&oacute;n</h2>
		</div>
		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
			<h2>Registrarse</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
			<!-- 	<?php printf($user);?> -->
				
			</div>
		<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"> 
			<?php echo $this->Form->create('Users',array('class' => 'form-group','url' => array('controller' => 'users', 'action' => 'registrar'))); ?>
				<?php echo $this->Form->input('name',array('label' => 'Nombre', 'class' => 'form-control', 'placeholder' => 'Nombre','required')); ?>
				<?php echo $this->Form->input('last_name',array('label' => 'Apellido', 'class' => 'form-control', 'placeholder' => 'Apellido','required')); ?>
				<?php echo $this->Form->input('email',array('label' => 'Email', 'class' => 'form-control', 'placeholder' => 'Email','required')); ?>
				<?php echo $this->Form->input('password',array('label' => 'Contraseña', 'class' => 'form-control', 'placeholder' => 'Contraseña','required')); ?>
				<?php echo $this->Form->input('birth_date',array('label' => 'Fecha de Nacimiento', 'class' => 'form-control', 'placeholder' => 'Fecha de Nacimiento','required')); ?>
				<br>
				<?php echo $this->Form->button("Registrar",array('class' => 'btn btn-lg btn-red' )) ?>  
				<?php $this->Form->end(); ?>

				
				
				
		</div>		
	</div>	
</div>