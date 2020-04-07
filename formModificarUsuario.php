<?php
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    include 'includes/header.html';
    $usuario = verUsuarioPorID();
?>
<body>
    <main class="formModificar Usuario">
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
            <h2 class="d-block text-center my-5">Modificar usuario</h2>
            <form action="modificarUsuario.php" method="POST">
                <label>Nombre: </label>
                <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario']; ?>" >
                <input type="text" name="usuNombre" class="form-control" value="<?= $usuario['usuNombre']; ?>" >
               
                <label>Apellido: </label>
                <input type="text" name="usuApellido" class="form-control" value="<?= $usuario['usuApellido']; ?>" >
               
                <label>Email: </label>
                <input type="text" name="usuEmail" class="form-control" value="<?= $usuario['usuEmail']; ?>" >
               
                <label>Contraseña: </label>
                <input type="text" name="usuPass" class="form-control" value="<?= $usuario['usuPass']; ?>" >
               
                <label>Estado: </label>
                <input type="text" name="usuEstado" class="form-control" value="<?= $usuario['usuEstado']; ?>" >
               
               
                <button class="btn btn-dark">Modificar</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary m-2">Volver a panel de administración de Usuarios</a>
            </form>
        </div>
    </main>
<?php
	include 'includes/footer.html';
?>

