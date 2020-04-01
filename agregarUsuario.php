<?php
	require 'funciones/conexion.php';
	require 'funciones/usuarios.php';
	include 'html/header.html';
	$existe = verTipoPorValor();
	if ($existe == 0 ){
        $chequeo = agregarTipo();
    }else {
		$existe = false;
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

	    <div class="col-6 mx-auto text-center">
            <h1 class="d-block text-center my-5" >Agregar usuario</h1>
<?php 
	if ($existe == false){
?>
			<script>
				Swal.fire({
				  title: 'Ya existe el usuario',
				  type: 'error',
				  showCancelButton: false,
				  confirmButtonColor: '#d33',
				  confirmButtonText: 'Volver al panel'
				}).then((result) => {
				  if (result.value) {
					window.location = 'formAgregarUsuario.php'
				  }
				})
			</script>
<?php
	}else{
    	$class = 'danger';
    	$mensaje = 'Nose pudo agregar el usuario';
    	if ($chequeo){ 
    		$class = 'success';
    		$mensaje = 'Usuario agregado correctamente.';
    	}
?>
			<div class="alert alert-<?= $class; ?>">
				<?= $mensaje ?>
			</div>
			<a href="adminUsuarios.php" class="btn btn-outline-secondary m-2">Volver a usuarios</a>
		</div>
<?php
	}
?>		
	</main>
<?php
	include 'html/footer.html';
?>