<?php
	include 'html/header.html';
?>
<body>
	<main id="admin">
    <header>
        <img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
        <h1>Los Mosquiteros</h1>
        <nav>
            <ul>
                <li class="btn btn-outline-secondary"><a href="index.php" class="text-dark">Inicio</a></li>
                <li class="btn btn-outline-secondary"><a href="" class="text-dark">Publicar</a></li>
                <li class="btn btn-outline-secondary"><a href="admin.php" class="text-dark">LogIn</a></li>
            </ul>
        </nav>
    </header>
	<div class="col-6 mx-auto">
		<h2 class="d-block text-center my-5">Panel de administración</h2>
		<div class="row">
			<div class="list-group col-6 mx-auto">
				<a href="#" class="list-group-item list-group-item-action text-center">Panel de administración de Barrios</a>
				<a href="adminEstados.php" class="list-group-item list-group-item-action text-center">Panel de administración de Estados</a>
				<a href="adminTipos.php" class="list-group-item list-group-item-action text-center">Panel de administración de Tipos</a>
				<a href="#" class="list-group-item list-group-item-action text-center">Panel de administración de Usuarios</a>
			</div>
		</div>
	</div>
	</main>
<?php
	include 'html/footer.html';
?>