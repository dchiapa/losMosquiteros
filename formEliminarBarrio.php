<?php
    require 'funciones/conexion.php';
    require 'funciones/barrio.php';
    include 'html/header.html';
    $check = barrioEnUso();
    if ($check == 0 ){
        $barrio = verBarrioPorID();
    }
?>
<body>
    <main class="formEliminar">
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
            <h2 class="d-block text-center my-5">Eliminación de barrio</h2>
<?php 
    if($check > 0 ){
?>
            <div class="alert alert-danger">No se puede eliminar el barrio seleccionada ya que el mismo esta en uso.</div>
            <br>
            <a href="adminBarrios.php" class="btn btn-outline-secondary ">Volver al panel de Barrios</a>
<?php 
    }
    else{
?>
            <div class="alert alert-warning text-center">¿Esta seguro que desea eliminar el barrio "<?= $barrio['valorBarrio']; ?>"?</div>
            <br>
            <form method="post" action="eliminarBarrio.php" class="row justify-content-center">
 	 		    <input type="hidden" name="valorBarrio" value="<?= $barrio['valorBarrio']; ?>">
 	 		    <button class="btn btn-success mx-2">Si</button> 
 	 		    <a href="adminBarrios.php" class="btn btn-danger mx-2">No</a>
            </form>
<?php 
    }
?>
        </div>
    </main>
<?php
	include 'html/footer.html';
?>         