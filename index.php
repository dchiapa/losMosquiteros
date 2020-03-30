<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
	require 'funciones/barrio.php';
	$tipos = listarTipos();
	$estados = listarEstados();
	$barrios = listarBarrios();
	include 'html/header.html';
?>
<body>


<main id="ppal">
	<div id="nav">
		<img src="img/logofinal.png" alt="Logo de Los mosquiteros">
		
		<nav>
			<ul>
				<li><a href="">PUBLICAR</a></li>
				<li><a href="">LOGIN</a></li>
			</ul>
		</nav>
	</div>

	
	<h2>Propiedades en venta y en alquiler</h2>
	<h3>El hogar que soñaste a tu alcance</h3>

	<form action="" method="get" accept-charset="utf-8" id="buscar">
	
		
		<div>
			<input type="radio" id="Compra" name="idEstado" value="1">
			<label for="Compra" id="labelCompra">Compra</label>
			
			<input type="radio" id="Alquiler" name="idEstado" value="2">
			<label for="Alquiler">Alquiler</label>
		</div>
	
	
		<div id="buscar2">
				<select name="idTipo" id="propTipo">
				<option value=""> Tipo de propiedad</option>
			<?php
				while ($tipo = mysqli_fetch_assoc($tipos)) {            	
			?>
					<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
			<?php 
				}
			?>
				</select>

				
				
				<select name="idBarrio" id="propTipo">
				<option value=""> Barrio</option>
			<?php
				while ($barrio = mysqli_fetch_assoc($barrios)) {            	
			?>
					<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
			<?php 
				}
			?>
				</select>
				
				<button>Buscar</button>
		</div>
	</form> 
	
	<script src="js/botones.js"></script>
</main>
<?php
	include 'html/footer.html';
?>