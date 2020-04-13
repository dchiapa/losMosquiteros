<?php
require 'config/config.php';
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
	$ambientes = listarAmbientes();
	$antiguedades = listarAntiguedades();
	$baños = listarBaños();
	$cocheras = listarCocheras();
	$dormitorios = listarDormitorios();

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
						<div class="col-3 card p-4">
<?php
	$imagen = buscarImagenPrincipal($propiedad['idImagenPrincipal']);
?>						
							<img class="imgPpal" src="img/<?=$imagen['imgNombre']?>" alt="Imagen de Propiedad">
						</div>
						<div class="col-1"></div>
						<div class=" datos col-8 card px-4 ">
							<p><?= $propiedad['proDireccion']?>  - <?= $propiedad['valorBarrio']?></p>
							<p><?= $propiedad['proDescripcion']?></p>
							<p>Superficie total: <?= $propiedad['proSupTotal']?>  - Superficie cubierta: <?= $propiedad['proSupCubierta']?> - Ambientes: <?= $propiedad['ambientes']?> - Baños: <?= $propiedad['proBaños']?> - Cocheras: <?= $propiedad['proCocheras']?></p>
						</div>
					</div>
<?php
    if ($propiedad['valorEstado'] == 'venta') {
?>                    
                    <h2>U$D<?= $propiedad['proPrecio']?></h2>
<?php
    }else{
?>
                    <h2>$<?= $propiedad['proPrecio']?></h2>
<?php
    }
?>
					<a href="vistaPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad']?>" class="btn btn-info my-2">Ver propiedad</a>
				</div>

<?php
	}
	if (mysqli_num_rows($propiedades) == 0) {
?>
				<script>
					Swal.fire({
            			title: 'Busqueda sin resultados',
            	  		type: 'error',
            	  		showCancelButton: false,
            	  		confirmButtonColor: '#d33',
            	  		confirmButtonText: 'Volver a inicio'
            		}).then((result) => {
            	  	if (result.value) {
            	    	window.location = 'listadoDePropiedades.php?idBarrio=0&idEstado=0&idTipo=0&ambientes=0&proAntiguedad=0&proBaños=0&proCocheras=0&proDormitorios=0'
            	  	}
            	})
		 		</script>
<?php
	}
?>
			</section>
		</div>
		<script src="js/imgPpal.js"></script>
		<script src="js/filtros.js"></script>
	</main>
<?php
	include 'includes/footer.html';
?>