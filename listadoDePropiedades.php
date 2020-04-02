<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	include 'html/header.html';
	$tipo = verTipoPorID();
	$estado = verEstadoPorID();
?>
<body>
	<main id="ppal">
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
        <div class="row mx-auto">
            <aside class="col-3 mx-auto">
                <div class="card px-4">
					<h2>Filtros activos</h2>
					<p class=" btn btn-primary "><?= $tipo['valorTipo'] ?></p>
					<p class=" btn btn-primary "><?= $estado['valorEstado'] ?></p>
                    <p class=" btn btn-danger ">Limpiar</p>
                </div>
			</aside>
			<section class="col-9">
				<div class="card px-4 my-1">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, nostrum quasi. Ullam vel nulla, debitis quaerat officia assumenda tempore saepe recusandae maiores eum delectus labore quos ab possimus fuga similique.</p>
					<a href="#" class="btn btn-info my-2">Ver propiedad</a>
				</div>
				<div class="card px-4">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, nostrum quasi. Ullam vel nulla, debitis quaerat officia assumenda tempore saepe recusandae maiores eum delectus labore quos ab possimus fuga similique.</p>
					<a href="#" class="btn btn-info my-2">Ver propiedad</a>
				</div>
			</section>
        </div>
	</main>
<?php
	include 'html/footer.html';
?>