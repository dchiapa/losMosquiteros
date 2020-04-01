<?php
	require 'funciones/conexion.php';
    require 'funciones/tipo.php';
    $chequeo = eliminarTipo();
	include 'html/header.html';
?>
<body>
<main id="adminTipos">
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
            <h1>Eliminación de tipo</h1>
<?php 
    $class = 'danger';
    $mensaje = 'Nose pudo eliminar el tipo';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Tipo eliminado correctamente';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminTipos.php" class="btn btn-outline-secondary m-2">Volver a tipos</a>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>