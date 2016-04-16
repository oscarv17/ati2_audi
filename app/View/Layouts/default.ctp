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
              <a class="navbar-brand" href="#"> <img src="/img/audi.png" alt="Audi"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarColl">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="#">Vehículos</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Conocenos</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?> 
    <?= $this->fetch('content') ?>

    <footer>
        <div class="row">
        	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">  
	       		<h1>S&iacute;guenos</h1>
	        	<h6>redes sociales aqui</h6>
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
