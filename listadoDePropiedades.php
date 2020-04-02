<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	require 'funciones/barrio.php';
	require 'funciones/propiedad.php';
	include 'html/header.html';
	$tipo = verTipoPorID();
	$estado = verEstadoPorID();
	$barrio = verBarrioPorID();
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
            <aside class="col-3 mx-auto">
                <div class="card px-4 shadow">
					<h2>Filtros activos</h2>
					<p class=" btn btn-primary "><?= $tipo['valorTipo'] ?></p>
					<p class=" btn btn-primary "><?= $estado['valorEstado'] ?></p>
                    <p class=" btn btn-danger ">Limpiar</p>
                </div>
			</aside>
			<section class="col-9">
<?php
	while ($propiedad = mysqli_fetch_assoc($propiedades)) {
?>
				<div class="propiedad card px-4 mb-4 shadow">
					<h2 class="text-center"><?= $propiedad['proTitulo'] ?></h2>
					<div class="contenido row">
						<div class=" imagen col-4 card px-4 ">
							<img src="img/noDisponible.jpg" alt="">
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
	</main>
<?php
	include 'html/footer.html';
?>