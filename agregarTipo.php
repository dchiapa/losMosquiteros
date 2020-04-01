<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	$chequeo = agregarTipo();
	include 'html/header.html';
?>
<body>
	<main>
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
            <h1>Agregar tipo</h1>
<?php 
    $class = 'danger';
    $mensaje = 'Nose pudo agregar el tipo';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Tipo agregado correctamente';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
        	</div>
        </div>
	</main>
<?php
	include 'html/footer.html';
?>