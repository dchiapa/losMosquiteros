<aside class="col-3 mx-auto">
    <div class=" card mx-auto p-4 shadow">
    	<h2 class="text-center">Filtros</h2>
		<form action="listadoDePropiedades.php" method="get">
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
					<label class="ambientes btn btn-secondary  mx"data-amb="<?= $ambiente['ambientes'] ?>"><?= $ambiente['ambientes'] ?></label>	
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
					<label class="baños btn btn-secondary  mx"><?= $baño['proBaños'] ?></label>	
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
					<label class="dormitorios btn btn-secondary  mx"><?= $dormitorio['proDormitorios'] ?></label>	
				</div>
<?php
	}
?>				
				<input type="hidden" id="proDormitorios" name="proDormitorios" value="0">
			</div>
			<hr>
			<button class="btn btn-danger w-100">Buscar</button>
		</form>
	</div>
</aside>