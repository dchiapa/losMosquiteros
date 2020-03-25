<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	$tipos = listarTipos();
	include 'html/header.html';
?>
<main id="ppal">
	<h2>Propiedades en venta y en alquiler</h2>
	<h3>El hogar que soñaste a tu alcance</h3>
	<form action="" method="get" accept-charset="utf-8" id="buscar">
		<div>
			<button type="button" value="1" data-dato="comprar" class="">Compra</button>
			<button type="button" value="2" data-dato="alquiler" class="">Alquiler</button>
		<div>
		<div id="buscar2">
			<select name="propTipo" id="propTipo">
			<option value=""> Seleccione una opción</option>
<?php
   	while ($tipo = mysqli_fetch_assoc($tipos)) {            	
?>
            	<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
<?php 
	}
?>
			</select>
			<input type="text" name="propUbicacion" placeholder="Ingrese un barrio">
			<button>Buscar</button>
		</div>
	</form> 
	<script src="js/botones.js"></script>
</main>
<?php
	include 'html/footer.html';
?>