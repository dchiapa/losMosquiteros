<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	$tipos = listarTipos();
	$estados = listarEstados();
	include 'html/header.html';
?>
<main id="ppal">
	<h2>Propiedades en venta y en alquiler</h2>
	<form action="" method="get" accept-charset="utf-8" class="container">
		<div class="row">
			<div class="col-3"></div>
			<input type="hidden" name="idEstado" value="0">			
<?php
   	while ($estado = mysqli_fetch_assoc($estados)) {            	
?>
			<button type="button" onclick="cambioEstado('<?= $estado['idEstado'] ?>')" value="<?= $estado['idEstado'] ?>" data-dato="comprar" class="btn btn-info col-2 m-2"><?= $estado['valorEstado'] ?></button>
<?php 
	}
?>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<select name="propTipo" id="propTipo" class="border border-dark rounded">
			<option value=""> Seleccione una opción</option>
<?php
   	while ($tipo = mysqli_fetch_assoc($tipos)) {            	
?>
            	<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
<?php 
	}
?>
			</select>
			<input type="text" name="propUbicacion" placeholder="Ingrese un barrio" class="border border-dark rounded col-6 mx-2">
			<button class="btn btn-info col-2">Buscar</button>
			<div class="col-1"></div>
		</div>
		<div class="col-3"></div>
	</form> 
	<h3>El hogar que soñaste a tu alcance</h3>
	<script src="js/botones.js"></script>
</main>
<script>
function cambioEstado(param) {	
	document.getElementsByName('idEstado')[0].value=param;
	document.getElementsByName('idEstado')[0].setAttribute('class', 'activo')
}
</script>
<?php
	include 'html/footer.html';
?>