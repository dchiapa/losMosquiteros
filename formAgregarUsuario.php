<?php
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    require 'config/config.php';
    include 'includes/header.html';
	$usuario = autenticarAdmin();
?>
<body>
    <main class="formAgregar Usuario">
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
            <h2 class="d-block text-center my-5">Agregar Usuario</h2>
            <form action="agregarUsuario.php" method="POST">
                <label>Nombre: </label>
                <input type="text" name="usuNombre" class="form-control">
                <label>Apellido: </label>
                <input type="text" name="usuApellido" class="form-control">
                <label>Email: </label>
                <input type="text" name="usuEmail" class="form-control">
                <label>Contraseña: </label>
                <input type="text" name="usuPass" class="form-control">
                <label>Estado: </label>
                <input type="text" name="usuEstado" class="form-control">
                <button class="btn btn-dark">Agregar</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary m-2">Volver a panel de administración</a>
            </form>
        </div>
    </main>
<?php
	include 'includes/footer.html';
?>