<?php
	require 'funciones/conexion.php';
    require 'funciones/estado.php';
    include 'html/header.html';
    $chequeo = eliminarEstado();
?>
<body>
<main class="eliminar">
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

	    <div class="col-6 mx-auto text-center">
            <h1 class="d-block text-center my-5">Eliminación de estado</h1>
<?php 
    $class = 'danger';
    $mensaje = 'Nose pudo eliminar el Estado.';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Estado eliminado correctamente.';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminEstados.php" class="btn btn-outline-secondary m-2 text-center">Volver a Estados</a>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>