<?php
	require 'funciones/conexion.php';
	require 'funciones/estado.php';
	include 'html/header.html';
	$chequeo = agregarEstado();
?>
<body>
	<main class="agregar">
		<header class="card-header border-0">
			<img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
			<nav>
			    <ul>
			        <li class="d-inline"><a href="index.php" class="btn btn-outline-light py-2 px-5">Inicio</a></li>
			        <li class="d-inline"><a href="" class="btn btn-outline-light py-2 px-5">Publicar</a></li>
			        <li class="d-inline"><a href="admin.php" class="btn btn-outline-light py-2 px-5">LogIn</a></li>
			    </ul>
			</nav>
		</header>

	    <div class="container">
            <h1>Agregar estado</h1>
<?php 
    $class = 'danger';
    $mensaje = 'Nose pudo agregar el estado';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Estado agregado correctamente';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminEstados.php" class="btn btn-outline-secondary m-2">Volver a estados</a>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>