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
        <div class="row mx-auto pt-2">
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
            <div class="col-3">
                <div class="card shadow">
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
            </div>
        </div>
        <script src="js/carrusel.js"></script>
    </main>
<?php
	include 'includes/footer.html';
?>