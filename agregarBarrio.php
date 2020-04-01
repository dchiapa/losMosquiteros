<?php
	require 'funciones/conexion.php';
	require 'funciones/barrio.php';
	include 'html/header.html';
	$chequeo = verBarrioPorValor();
	if ($chequeo == 0 ){
        $chequeo = agregarBarrio();
    }else {
		$chequeo = false;
	}
	
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
            <h1>Agregar barrio</h1>
<?php 
if ($chequeo == false){
?>
			<script>
				console.log('ya Existe usuario');
				Swal.fire({
            	  title: 'Ya existe el barrio',
            	  text: "",
            	  type: 'error',
            	  showCancelButton: false,
            	  confirmButtonColor: '#d33',
            	  confirmButtonText: 'Volver al panel'
            	}).then((result) => {
            	  if (result.value) {
            	    window.location = 'formAgregarBarrio.php'
            	  }
            	})
				</script>
<?php
}
    $class = 'danger';
    $mensaje = 'Nose pudo agregar el barrio';
    if ($chequeo){ 
    	$class = 'success';
    	$mensaje = 'Barrio agregado correctamente';
    }
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminBarrios.php" class="btn btn-outline-secondary m-2">Volver a barrios</a>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>