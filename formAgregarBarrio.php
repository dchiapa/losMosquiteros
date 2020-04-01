<?php
    require 'funciones/conexion.php';
    require 'funciones/barrio.php';
    include 'html/header.html';
    $barrios = listarBarrios();
?>
<body>
    <main class="formAgregar">
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
            <h2 class="d-block text-center my-5">Agregar barrio</h2>
            <form action="agregarBarrio.php" method="POST">
                <label>Barrio: </label>
                <input type="text" name="valorBarrio" class="form-control">
                <button class="btn btn-dark">Agregar</button>
                <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
            </form>
        </div>
    </main>
<?php
	include 'html/footer.html';
?>