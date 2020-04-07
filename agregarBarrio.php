<?php
	require 'funciones/conexion.php';
	require 'config/config.php';
	require 'funciones/usuarios.php';
	$usuario = autenticarAdmin();
	require 'funciones/barrio.php';
	include 'html/header.html';
	$existe = verBarrioPorValor();
	if ($existe == null ){
        $chequeo = agregarBarrio();
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
            <h1 class="text-center">Agregar barrio</h1>
<?php
	if ($existe != null){
?>
			<script>
				Swal.fire({
            	  title: 'Ya existe el barrio',
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
	}else{
	    if ($chequeo){
?>
	    	<script>
				Swal.fire({
            	  title: 'Barrio agregado',
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
		}
		else {
?>
			<script>
				Swal.fire({
            	  title: 'Barrio no agregado',
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

	}
?>
	</main>
<?php
	include 'html/footer.html';
?>