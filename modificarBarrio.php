<?php
	require 'funciones/conexion.php';
    require 'funciones/barrio.php';
    include 'html/header.html';
    $chequeo = modificarBarrio();
?>
<body>
<main id="adminBarrios">
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
	    <div class="container">
            <h1>Modificación de barrio</h1>
<?php 
    $class = 'danger';
    $mensaje = 'Nose pudo modificar el barrio';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Barrio modificado correctamente';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminBarrios.php" class="btn btn-outline-secondary m-2">Volver al panel de Barrios</a>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>