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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
<?php
    while ($imagen = mysqli_fetch_assoc($imagenes)) {
?>   
                    <div class="carousel-item active">
                        <img src="img/<?= $imagen['imgNoimbre'] ?>" class="d-block w-100" alt="Imagen de propiedad">
                    </div>
<?php
     }
?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
            <div class="col-3">
                <div class="card">
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
    </main>
<?php
	include 'includes/footer.html';
?>