<?php
    require 'funciones/conexion.php';
    require 'funciones/barrio.php';
    require 'funciones/estado.php';
    require 'funciones/imagen.php';
    require 'funciones/propiedad.php';
	require 'funciones/tipo.php';
    include 'includes/header.html';
    $imagenes = listarImagenesPropiedad();
    $propiedad = verPropiedadPorID();
    
?>
<body>
	<main id="propiedad">
		<header class="card-header border-0">
			<img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
			<h1 class="d-none">Los Mosquiteros</h1>
			<nav>
			    <ul>
			        <li class="d-inline"><a href="index.php" class="btn btn-outline-light py-2 px-5">Inicio</a></li>
			        <li class="d-inline"><a href="" class="btn btn-outline-light py-2 px-5">Publicar</a></li>
			        <li class="d-inline"><a href="admin.php" class="btn btn-outline-light py-2 px-5">LogIn</a></li>
			    </ul>
			</nav>
        </header>
        <h1 class="text-center"><?= $propiedad['proTitulo']?></h1>
        <div class="row mx-2 pt-2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div id="carousel-inner" class="carousel-inner">
<?php
    while ($imagen = mysqli_fetch_assoc($imagenes)) {
?>   
                    <div class="carousel-item">
                        <a href="img/<?= $imagen['imgNombre'] ?>" target="_blank">
                            <img src="img/<?= $imagen['imgNombre'] ?>" class="carousel-img" alt="Imagen de propiedad">
                        </a>
                    </div>
<?php
     }
?>
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
            <div class="col-8">
                <div class="card col-5 mb-2 shadow">
<?php
    if ($propiedad['valorEstado'] == 'venta') {
?>                    
                    <h2 class="text-center"><?= $propiedad['valorEstado']?>: U$D<?= $propiedad['proPrecio']?></h2>
<?php
    }else{
?>
                    <h2 class="text-center"><?= $propiedad['valorEstado']?>: $<?= $propiedad['proPrecio']?></h2>
<?php
    }
?> 

                </div>
                <div class="card shadow p-3">
                    <p>Dirección: <?=$propiedad['proDireccion']?></p>
                    <p>Descripción: <?=$propiedad['proDescripcion']?></p>
                    <p>Superficie total: <?=$propiedad['proSupTotal']?>; Superficie cubierta: <?=$propiedad['proSupCubierta']?>; Superficie Semicubierta: <?=$propiedad['proSupSemi']?>; 
<?php
    if(is_numeric($propiedad['proAntiguedad'])){
?>
                    Antiguedad: <?=$propiedad['proAntiguedad']?> Años</p>
<?php   
    }else{
?>
                    Antiguedad: <?=$propiedad['proAntiguedad']?></p>
<?php   
    }
?>
                    <p>Ambientes: <?=$propiedad['ambientes']?>; Dormitorios: <?=$propiedad['proDormitorios']?>; Baños: <?=$propiedad['proBaños']?>; Cocheras: <?=$propiedad['proCocheras']?>
<?php
    if($propiedad['proQuincho'] == 1){
?>
; Quincho
<?php   
    }
    if($propiedad['proPileta'] == 1){
?>
; Pileta
<?php   
    }
    if($propiedad['proParrilla'] == 1){
?>
; Parrilla
<?php
    }
    if($propiedad['proParrilla'] == 1){
?>
; Jardin
<?php
    }
?>                    
                    </p>
                    <p>Servicios:
<?php
    if($propiedad['proLuzEle'] == 1){
?>
Luz eléctrica; 
<?php   
    }
    if($propiedad['proAguaCorriente'] == 1){
?>
Agua corriente; 
<?php   
    }
    if($propiedad['proAguaPozo'] == 1){
?>     
Agua de pozo;  
<?php   
    }
    if($propiedad['proGasNatural'] == 1){
?>     
Gas natural;
<?php   
    }
    if($propiedad['proGasEmbasado'] == 1){
?>     
Gas Embasado;                  
<?php   
    }
    if($propiedad['proCloacas'] == 1){
?>     
Cloacas
<?php
    }
?>        
                    </p>
                </div>
                <div class="row">
                    <a href="#" class="btn btn-primary col-4 mx-auto my-4">Contacto</a>
                </div>
            </div>
        </div>
        <script src="js/carrusel.js"></script>
    </main>
<?php
	include 'includes/footer.html';
?>