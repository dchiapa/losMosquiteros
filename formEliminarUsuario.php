<?php
    require 'funciones/conexion.php';
    require 'config/config.php';
	require 'funciones/usuarios.php';
	$usuario = autenticarAdmin();
    include 'html/header.html';
    $usuario = verUsuarioPorID();

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
            <h2 class="d-block text-center my-5">Eliminación de usuario</h2>

            <div class="alert alert-warning text-center">¿Esta seguro que desea eliminar el usuario" <?= $usuario['usuNombre']; ?>"?</div>
            <br>
            <form method="post" action="eliminarUsuario.php" class="row justify-content-center">
 	 		    <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario']; ?>">
 	 		    <button class="btn btn-success mx-2">Si</button> 
 	 		    <a href="adminUsuarios.php" class="btn btn-danger mx-2">No</a>
            </form>

        </div>
    </main>
<?php
	include 'html/footer.html';
?>         