<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	require 'funciones/barrio.php';
	$tipos = listarTipos();
	$estados = listarEstados();
	$barrios = listarBarrios();
	include 'includes/header.html';
?>
<body>
	<main id="ppal">
		<header class="card-header border-0">
			<img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
			<h1 class="d-none">Los Mosquiteros</h1>
			<nav>
			    <ul>
			        <li class="d-inline"><a href="index.php" class="btn btn-outline-light py-2 px-5">Inicio</a></li>
			        <li class="d-inline"><a href="" class="btn btn-outline-light py-2 px-5">Publicar</a></li>
			        <li class="d-inline"><a href="formLogin.php" class="btn btn-outline-light py-2 px-5">LogIn</a></li>
			    </ul>
			</nav>
		</header>
		<h2 class="text-light">Propiedades en venta y en alquiler</h2>
		<form action="listadoDePropiedades.php" method="get" class="container">
			<div class="row">
				<div class="col-3"></div>
<?php
   	while ($estado = mysqli_fetch_assoc($estados)) {
?>
				<button type="button" value="<?= $estado['idEstado'] ?>" id="<?= $estado['idEstado'] ?>" class=" btnEstado btn btn-secondary col-2 m-2 py-2 px-5"><?= $estado['valorEstado'] ?></button>
<?php
	}
?>
				<div class="col-3"></div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<select name="idTipo" id="idTipo" class="border border-dark rounded p-2 mx-2">
					<option value="0"> Seleccione una opción</option>
<?php
   	while ($tipo = mysqli_fetch_assoc($tipos)) {
?>
    				<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
<?php
	}
?>
				</select>
				<select name="idBarrio" id="idBarrio" class="border border-dark rounded py-2 mx-2">
					<option value="0"> Seleccione una opción</option>
<?php
   	while ($barrio = mysqli_fetch_assoc($barrios)) {
?>
    				<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
<?php
	}
?>
				</select>
				<input type="hidden" id="idEstado" name="idEstado" value="0">
				<button class="btn btn-info col-2">Buscar</button>
				<div class="col-2"></div>
			</div>
		</form>
		<h3 class="text-primary">El hogar que soñaste a tu alcance</h3>
		<script src="js/estado.js"></script>
	</main>
<?php
	include 'includes/footer.html';
?>