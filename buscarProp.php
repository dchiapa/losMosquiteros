<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	include 'includes/header.html';
	$tipos = listarTipos();
	$estados = listarEstados();
?>
<body>
	<main id="ppal">

	</main>
<?php
	include 'includes/footer.html';
?>