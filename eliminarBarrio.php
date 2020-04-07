<?php
	require 'funciones/conexion.php';
	require 'config/config.php';
	require 'funciones/usuarios.php';
	$usuario = autenticarAdmin();
    require 'funciones/barrio.php';
    include 'html/header.html';
    $chequeo = eliminarBarrio();
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
            <h1 class="d-block text-center my-5">Eliminación de barrio</h1>
<?php
    if ($chequeo){
?>
	    	<script>
				Swal.fire({
            	  title: 'Barrio eliminado',
            	  type: 'success',
            	  showCancelButton: false,
            	  confirmButtonColor: '#9ee87f',
            	  confirmButtonText: 'Volver al panel'
            	}).then((result) => {
            	  if (result.value) {
            	    window.location = 'adminBarrios.php'
            	  }
            	})
			</script>
<?php
	}else{
?>
			<script>
				Swal.fire({
            	  title: 'Barrio no eliminado',
            	  type: 'error',
            	  showCancelButton: false,
            	  confirmButtonColor: '#d33',
            	  confirmButtonText: 'Volver al panel'
            	}).then((result) => {
            	  if (result.value) {
            	    window.location = 'formEliminarBarrio.php'
            	  }
            	})
			</script>
<?php
	}
?>
	</main>
<?php
	include 'html/footer.html';
?>