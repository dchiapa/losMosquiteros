<?php
    require 'funciones/conexion.php';
    require 'config/config.php';
	  require 'funciones/usuarios.php';
	  $usuario = autenticarAdmin();
    require 'funciones/tipo.php';
    include 'includes/header.html';
    $chequeo = eliminarTipo();
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
    if ($chequeo){
?>
            <script>
                Swal.fire({
                  title: 'Tipo eliminado',
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#9ee87f',
                  confirmButtonText: 'Volver al panel'
                }).then((result) => {
                  if (result.value) {
                    window.location = 'adminTipos.php'
                  }
                })
            </script>
<?php
    }else{
?>
            <script>
                Swal.fire({
                  title: 'Tipo no eliminado',
                  type: 'error',
                  showCancelButton: false,
                  confirmButtonColor: '#d33',
                  confirmButtonText: 'Volver al panel'
                }).then((result) => {
                  if (result.value) {
                    window.location = 'formEliminarTipo.php'
                  }
                })
            </script>
<?php
    }
?>
</main>
<?php
	include 'includes/footer.html';
?>