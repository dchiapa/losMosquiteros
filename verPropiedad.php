<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
    require 'funciones/barrio.php';
    require 'funciones/propiedad.php';
	$tipos = listarTipos();
	$estados = listarEstados();
    $barrios = listarBarrios(); 
    $propiedades = verPropiedadPorID();
	include 'html/header2.html';
?>

<div id="contenedor">
<div class="contendorcarousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/03.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/02.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="card">
  <h5 class="card-header"><?= $propiedades['proTitulo']; ?></h5>
  <h5 class="btn btn-primary"><?= $propiedades['valorEstado']; ?></h5>
  <div class="card-body">
    <h5 class="card-title">Dirección: <?= $propiedades['proDireccion']; ?></h5>
    <h5 class="card-title">Precio: $ <?= $propiedades['proPrecio']; ?></h5>
    <h6 class="card-title">Ambientes: <?= $propiedades['ambientes']; ?></h6>
    <h6 class="card-title">Dormitorios: <?= $propiedades['proDormitorios']; ?></h6>
    <h6 class="card-title">Baños: <?= $propiedades['proBaños']; ?></h6>
    <?php 
      if ($propiedades['proAntiguedad'] > 0 ){
      ?>
        <h6 class="card-title"><?= $propiedades['proAntiguedad']; ?> años </h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proCocheras'] > 0 ){
      ?>
        <h6 class="card-title">Cocheras: <?= $propiedades['proCocheras']; ?></h6>  
    
    <?php
    }
    ?>
    <h5>Descripción:</h5><p class="card-text"><?= $propiedades['proDescripcion']; ?></p>
    <a href="#" class="btn btn-primary">Contacto</a>
  </div>
</div>


<div class="row">

  <div class="col-md-3">
      <div class="card">
      <h5 class="card-header">Superficie</h5>
        <div class="card-body">
          <h6 class="card-title">Total: <?= $propiedades['proSupTotal']; ?> m2</h6>
          <h6 class="card-title">Cubierta: <?= $propiedades['proSupCubierta']; ?> m2</h6>
          <h6 class="card-title">Se.cubierta: <?= $propiedades['proSupSemi']; ?> m2</h6>         
        </div>
      </div>
  </div>

  <div class="col-md-3">
    <div class="card">
    <h5 class="card-header">Adicionales</h5>
      <div class="card-body">
      <?php 
      if ($propiedades['proPileta'] == 1 ){
      ?>
        <h6 class="card-title">Pileta</h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proJardin'] == 1 ){
      ?>
        <h6 class="card-title">Jardin</h6>  
    
    <?php
    }
    ?>
    
    <?php 
      if ($propiedades['proQuincho'] == 1 ){
      ?>
        <h6 class="card-title">Quincho <i class="fas fa-check-square"></i> </h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proParrilla'] == 1 ){
      ?>
        <h6 class="card-title">Parrilla</i></h6>  
    
    <?php
    }
    ?>
        
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card">
    <h5 class="card-header">Servicios</h5>
      <div class="card-body">
      <?php 
      if ($propiedades['proLuzEle'] == 1 ){
      ?>
        <h6 class="card-title">Luz electrica</h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proAguaCorriente'] == 1 ){
      ?>
        <h6 class="card-title">Agua corriente</h6>  
    
    <?php
    }
    ?>
    
    <?php 
      if ($propiedades['proAguaPozo'] == 1 ){
      ?>
        <h6 class="card-title">Agua de pozo</h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proGasNatural'] == 1 ){
      ?>
        <h6 class="card-title">Gas natural</h6>  
    
    <?php
    }
    ?>

    <?php 
      if ($propiedades['proGasEmbasado'] == 1 ){
      ?>
        <h6 class="card-title">Gas Embasado</h6>  
    
    <?php
    }
    ?>
        
      </div>
    </div>
  </div>
</div>

<div>
<img src="" alt="">
</div>
</div>


<?php
	include 'html/footer.html';
?>