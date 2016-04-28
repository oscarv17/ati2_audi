<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'AudiMotors';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?> -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('transparent.css') ?> 
    <?= $this->Html->css('carousel.css') ?> 
    <?= $this->Html->css('styles.css') ?> 
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
     <?= $this->fetch('script') ?> 
</head>
<body>
    <nav class="navbar navbar-default" id="custom-bootstrap-menu">
        <div class="container-fluid">
            <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarColl" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"> <img src="/img/audi.png" alt="Audi"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarColl">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" rel='1'><a href="/">Home</a></li>
                    <?php if(isset($userLogin)){ ?>
                     <li rel='2' class="dropdown" id="ddUser">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $userLogin['User']['name']." ".$userLogin['User']['last_name'] ?></a>
                        <ul class="dropdown-menu" id="ddUserMenu">
                         <li rel='7'><a href="#" class="profile">Mi Veh&iacute;culo</a></li>
                         <li rel='7'><a href="/users/logout">Cerrar Sesi&oacute;n</a></li>
                        </ul>
                    </li>
                    <?php }else{ ?>
                        <li rel='2'><a href="/iniciar_sesion">Iniciar Sesi&oacute;n</a></li>
                    <?php } ?>
                    <li rel='3'><a href="/vehiculos" class="listVehicles">Vehículos</a></li>
                    <li rel='4'><a href="/servicios" id='listServices'>Servicios</a></li>
                    <li rel='5' class="dropdown" id="cono">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                        <ul class="dropdown-menu">
                         <li rel='6'><a href="/conocenos" id="meet">Conocenos</a></li>
                         <li rel='7'><a href="#">Contáctanos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="principal">
    <?= $this->Flash->render() ?> 
    <?= $this->fetch('content') ?>
    </div>
    <div class="loader" style="display: none"><img src="/img/loader.gif"></div>
    <footer>
        <div class="row">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">  
	       		<h1>S&iacute;guenos</h1>
	        	<table class="redes">
                    <tr>
                     <td class="line"><a href="#" class="twitter_transp" title="Siguenos en Twitter">Twitter<span></span></a></td>
                    <td class="line"><a href="#" class="pinterest_transp" title="Siguenos en Pinterest">Pinterest<span></span></a></td>
                    <td class="line"><a href="#" class="facebook_transp" title="Siguenos en Facebook">Facebook<span></span></a></td>
                    <td class="line"><a href="#" class="googleplus_transp" title="Siguenos en Google Plus">Google Plus<span></span></a></td>
            </tr>
        </table>
	        </div> 
	        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
	        	<img src="/img/audifoot.png" alt="Audi" class="foot-img" />
	        </div>
        </div>
    </footer>
    <?= $this->Html->script('jquery-2.2.3.min') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?= $this->Html->script('main') ?>
</body>
</html>
