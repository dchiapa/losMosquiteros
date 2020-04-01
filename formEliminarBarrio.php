<?php
    require 'funciones/conexion.php';
    require 'funciones/barrio.php';
    $check = barrioEnUso();
	$barrio = verBarrioPorID();
	include 'html/header.html';
?>
<body>
    <main id="adminEstados">
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

        <div class="col-6 mx-auto">
            <h2 class="d-block text-center my-5">Eliminación de barrio</h2>

            <?php 
            if($check > 0 ){
            ?>
                <div class="alert alert-danger">No se puede eliminar el barrio seleccionada ya que el mismo esta en uso.</div>
                <br>
                <a href="adminBarrios.php" class="btn btn-outline-secondary">Volver al panel de Barrios</a>
            <?php 
                } else if ($check == 0 ){
                    // modifiar lo de abajo por el fom POST , esto iria arriba en head
            ?>

            <div style="width: 400px" class="alert alert-warning">¿Esta seguro que desea eliminar el barrio "<?= $barrio['valorBarrio']; ?>"?</div>

            <br>

            <form method="post" action="eliminarBarrio.php">
 	 		<input type="hidden" name="valorBarrio" value="<?= $barrio['valorBarrio']; ?>">
 	 		<button class="btn btn-success">Si</button> 
 	 		<a href="adminBarrios.php" class="btn btn-danger">No</a>


            <?php 
                }
            ?>
        </div>
    </main>

<?php
	include 'html/footer.html';
?>


         