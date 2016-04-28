<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <div class="container">
        <div class="carousel-caption transparency">
          <h1>Nuestra Tienda</h1>
         <p>Visita nuestra tienda para conseguir los &uacute;ltimos modelos de Audi</p>
          <p><a class="btn btn-lg btn-red listVehicles" href="/vehiculos" role="button">Cat&aacute;logo</a></p>
        </div>
      </div>
      <img class="first-slide" src="img/slide1.png" alt="First slide">
      
    </div>
    <div class="item">
      <img class="second-slide" src="img/slide2.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption transparency">
          <h1>Servicios</h1>
          <p>P&iacute;de tu cita para hacer servicio a tu veh&iacute;culo</p>
     <!--      <p><a class="btn btn-lg btn-red " href="#" role="button">Mis Citas</a></p> -->
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="img/slide3.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption transparency">
          <h1>Audi es nuestra pasi&oacute;n</h1>
          <p>S&iacute;guenos en nuestras redes sociales para estar enterado de eventos</p>
          <p><a class="btn btn-lg btn-red " href="#" role="button">Seguir</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-home">
   <div class="row padding-botton">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"> 
     <h2 class="no-margin">Mi veh&iacute;culo</h2>
     <hr class="hr-red">
     <h4>Ingresa a nuestro sitio para poder consultar nuestos servicios para tu autom&oacute;vil</h4>
     <?php if($isLogin==0){ ?>
     <a type="button" class="btn btn-lg btn-red" role="button" href="/iniciar_sesion">Iniciar Sesión</a>
    <?php }else{ ?>
       <a type="button" class="btn btn-lg btn-red profile" role="button">Ingresar</a>
    <?php } ?>
    </div>  
   </div>
   <div class="row">
     <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
        <h2>Conócenos</h2>
        <hr class="hr-red">
        <h4>Conoce el origen de la empresa, su misi&oacute;n y visi&oacute;n</h4>
        <a class="btn btn-lg btn-red" href="/conocenos" role="button">Leer m&aacute;s</a>
     </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
        <h2>Contáctanos</h2>
        <hr class="hr-red">
        <h4>Comúnicate con nosotros para obtener información</h4>
        <button type="button" class="btn btn-lg btn-red">Leer m&aacute;s</button>
     </div>
     </div>
   </div>
</div>