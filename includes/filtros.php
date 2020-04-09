<aside class="col-3 mx-auto">
    <div class=" card mx-auto p-4 shadow">
    	<h2 class="text-center">Filtros</h2>
		<form action="listadoDePropiedades.php" method="get" class="container">
			<div>
				<label for="idBarrio">Barrio:</label>
				<select name="idBarrio" id="idBarrio" class="w-100">
<?php
	if($barrio != ''){
?>
					<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
<?php
	}
?>
					<option value="0">Seleccione una opcion</option>
<?php	
	while($barrio = mysqli_fetch_assoc($barrios)){
?>
		
					<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
<?php
	}
?>
				</select>
			</div>
			<hr>
			<div>
				<label for="idEstado">Estado:</label>
				<select name="idEstado" id="idEstado" class="w-100">
<?php
	if($estado != ''){
?>
					<option value="<?= $estado['idEstado'] ?>"><?= $estado['valorEstado'] ?></option>
<?php
	}?>
					<option value="0">Seleccione una opcion</option>
<?php
	while($estado = mysqli_fetch_assoc($estados)){
?>
		
					<option value="<?= $estado['idEstado'] ?>"><?= $estado['valorEstado'] ?></option>
<?php
	}
?>
				</select>
			</div>
			<hr>
			<div>
				<label for="idTipo">Tipo:</label>
				<select name="idTipo" id="idTipo" class="w-100">
<?php
	if($tipo != ''){
?>
					<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
<?php
	}
?>
					<option value="0">Seleccione una opcion</option>
<?php
	while($tipo = mysqli_fetch_assoc($tipos)){
?>
		
					<option value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></option>
<?php
	}
?>
				</select>
			</div>
			<hr>
			<div>
				<label>Ambientes:</label>
				<br>
<?php
	while ($ambiente = mysqli_fetch_assoc($ambientes)) {
?>					
				<div class="d-inline mx-2">
					<button type="button" class="ambientes btn btn-secondary" value="<?= $ambiente['ambientes'] ?>"><?= $ambiente['ambientes'] ?></button>	
				</div>
<?php
	}
?>				
				<input type="hidden" id="ambientes" name="ambientes" value="0">
			</div>
			<hr>
			<div>
				<label>Baños:</label>
				<br>
<?php
	while ($baño = mysqli_fetch_assoc($baños)) {
?>					
				<div class="d-inline mx-2">
					<button type="button" class="baños btn btn-secondary" value="<?= $baño['proBaños'] ?>"><?= $baño['proBaños'] ?></button>	
				</div>
<?php
	}
?>				
				<input type="hidden" id="proBaños" name="proBaños" value="0">
			</div>
			<hr>
			<div>
				<label>Dormitorios:</label>
				<br>
<?php
	while ($dormitorio = mysqli_fetch_assoc($dormitorios)) {
?>					
				<div class="d-inline mx-2">
					<button type="button" class="dormitorios btn btn-secondary" value="<?= $dormitorio['proDormitorios'] ?>"><?= $dormitorio['proDormitorios'] ?></button>	
				</div>
<?php
	}
?>				
				<input type="hidden" id="proDormitorios" name="proDormitorios" value="0">
			</div>
			<hr>
			<div>
				<label>Antiguedad:</label>
				<br>				
				<div class="d-inline mx-auto">
					<button type="button" class="antiguedad btn btn-secondary my-2 w-100" value="<10">Hasta 10 años</button>	
				</div>	
				<div class="d-inline mx-auto">
					<button type="button" class="antiguedad btn btn-secondary my-2 w-100" value="<30">Entre 10 y 30 años</button>	
				</div>
				<div class="d-inline mx-auto">
					<button type="button" class="antiguedad btn btn-secondary my-2 w-100" value="<50">Entre 30 y 50 años</button>	
				</div>	
				<div class="d-inline mx-auto">
					<button type="button" class="antiguedad btn btn-secondary my-2 w-100" value=">50">Más de 50 años</button>	
				</div>	
				<input type="hidden" id="proAntiguedad" name="proAntiguedad" value="0">
			</div>
			<hr>
			<div>
				<label>Coheras:</label>
				<br>
<?php
	while ($cochera = mysqli_fetch_assoc($cocheras)) {
?>					
				<div class="d-inline mx-2">
					<button type="button" class="cocheras btn btn-secondary" value="<?= $cochera['proCocheras'] ?>"><?= $cochera['proCocheras'] ?></button>	
				</div>
<?php
	}
?>				
				<input type="hidden" id="proCocheras" name="proCocheras" value="0">
			</div>
			<hr>
			<button class="btn btn-danger w-100">Buscar</button>
		</form>
	</div>
</aside>