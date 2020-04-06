<?php
	require 'config/config.php';
	require 'funciones/usuarios.php';
	autenticarInvitado();
	
	include 'html/header.html';
?>
<body>
	<main id="admin">
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
		<div class="col-8 mx-auto">
			<h2 class="d-block text-center my-5">Panel de administración</h2>
			<div class="row">
				<div class="list-group col-6 mx-auto">
				<a href="adminPropiedades.php" class="list-group-item list-group-item-action text-center">Panel de administración de Propiedades</a>
					<a href="adminBarrios.php" class="list-group-item list-group-item-action text-center">Panel de administración de Barrios</a>
					<a href="adminEstados.php" class="list-group-item list-group-item-action text-center">Panel de administración de Estados</a>
					<a href="adminTipos.php" class="list-group-item list-group-item-action text-center">Panel de administración de Tipos</a>
					<a href="adminUsuarios.php" class="list-group-item list-group-item-action text-center">Panel de administración de Usuarios</a>
				</div>
			</div>
		</div>
	</main>
<?php
	include 'html/footer.html';
?>