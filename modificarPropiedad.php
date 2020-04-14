<?php
	require 'funciones/conexion.php';
    require 'funciones/propiedad.php';
    include 'includes/header.html';
    $chequeo = modificarPropiedad();
?>
<body>
<main class="modificar">
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
            <h1 class="d-block text-center my-5">Modificación de propiedad</h1>
<?php
    if ($chequeo){
?>
            <script>
                Swal.fire({
                  title: 'Propiedad modificada',
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
    }else{
?>
            <script>
                Swal.fire({
                  title: 'No se modificó la propiedad',
                  type: 'error',
                  showCancelButton: false,
                  confirmButtonColor: '#d33',
                  confirmButtonText: 'Volver al panel'
                }).then((result) => {
                  if (result.value) {
                    window.location = 'formModificarPropiedad.php'
                  }
                })
            </script>
<?php
    }
?>
		</div>
	</main>
<?php
	include 'includes/footer.html';
?>