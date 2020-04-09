<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	include 'includes/header.html';
	$tipos = listarTipos();
	$estados = listarEstados();
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

	</main>
<?php
	include 'includes/footer.html';
?>