<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	require 'funciones/barrio.php';
	require 'funciones/propiedad.php';
	require 'funciones/imagen.php';
	include 'includes/header.html';
	$tipo = verTipoPorID();
	$estado = verEstadoPorID();
	$barrio = verBarrioPorID();
	$tipos = listarTipos();
	$estados = listarEstados();
	$barrios = listarBarrios();
	$propiedades = buscarPropiedades();
?>
<body>
	<main id="listaProp">
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
        <div class="row mx-auto pt-2">
<?php
	include 'includes/filtros.php';
?>
			<section class="col-9">
<?php
	while ($propiedad = mysqli_fetch_assoc($propiedades)) {
?>
				<div class="propiedad card px-4 mb-4 shadow">
					<h2 class="text-center"><?= $propiedad['proTitulo'] ?></h2>
					<div class="contenido row">
						<div class=" imagen col-4 card px-4 ">
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  								<div class="carousel-inner">
<?php
		// Ver como agregar imagenes
?>
  								  <div class="carousel-item active">
  									<img src="img/01.jpg" class="d-block w-100" alt="<?= $tipo ?> en <?= $estado ?>">
  								  </div>
<?php

?>
								</div>
 								<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    								<span class="sr-only">Previous</span>
  								</a>
  								<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    								<span class="carousel-control-next-icon" aria-hidden="true"></span>
    								<span class="sr-only">Next</span>
  								</a>
							</div>
						</div>
						<div class="col-1"></div>
						<div class=" datos col-7 card px-4 ">
							<p><?= $propiedad['proDireccion']?>  - <?= $propiedad['valorBarrio']?></p>
							<p><?= $propiedad['proDescripcion']?></p>
							<p>Superficie total: <?= $propiedad['proSupTotal']?>  - Superficie cubierta: <?= $propiedad['proSupCubierta']?> - Ambientes: <?= $propiedad['ambientes']?> - Baños: <?= $propiedad['proBaños']?> - Cocheras: <?= $propiedad['proCocheras']?></p>
						</div>
					</div>
					<p >$ <?= $propiedad['proPrecio']?></p>
					<a href="#" class="btn btn-info my-2">Ver propiedad</a>
				</div>

<?php
	}
?>


			</section>
        </div>
		<script src="js/filtros.js"></script>
	</main>
<?php
	include 'includes/footer.html';
?>