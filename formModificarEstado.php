<?php
    require 'funciones/conexion.php';
    require 'config/config.php';
	require 'funciones/usuarios.php';
	$usuario = autenticarAdmin();
    require 'funciones/Estado.php';
    include 'includes/header.html';
    $estado = verEstadoPorID();
?>
<body>
    <main class="formModificar">
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
            <h2 class="d-block text-center my-5">Modificar Estado</h2>
            <form action="modificarEstado.php" method="POST">
                <label>Estado: </label>
                <input type="hidden" name="idEstado" value="<?= $estado['idEstado']; ?>" >
                <input type="text" name="valorEstado" class="form-control" value="<?= $estado['valorEstado']; ?>" required>
                <button class="btn btn-dark">Modificar</button>
                <a href="adminEstados.php" class="btn btn-outline-secondary m-2">Volver a Estados</a>
            </form>
        </div>
    </main>
<?php
	include 'includes/footer.html';
?>

