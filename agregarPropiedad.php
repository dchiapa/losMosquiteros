<?php
	require 'funciones/conexion.php';
	require 'funciones/propiedad.php';
    include 'html/header.html';
    $chequeo = agregarPropiedad();

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
            <h1 class="text-center">Agregar propiedad</h1>

<?php
    if ($chequeo){
?>
	    	<script>
				Swal.fire({
            	  title: 'Propiedad agregado',
            	  type: 'success',
            	  showCancelButton: false,
            	  confirmButtonColor: '#9ee87f',
            	  confirmButtonText: 'Volver al panel'
            	}).then((result) => {
            	  if (result.value) {
            	    window.location = 'adminPropiedades.php'
            	  }
            	})
			</script>
<?php
	}
		else {
?>
			<script>
				Swal.fire({
            	  title: 'Propiedad no agregado',
            	  type: 'error',
            	  showCancelButton: false,
            	  confirmButtonColor: '#d33',
            	  confirmButtonText: 'Volver al panel'
            	}).then((result) => {
            	  if (result.value) {
            	    window.location = 'adminPropiedades.php'
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