<aside class="col-3 mx-auto">
    <div class=" card mx-auto p-4 shadow">
    	<h2 class="text-center">Filtros</h2>
		<form action="buscarProp.php" method="GET">
			<div>
				<label for="idBarrio">Barrio:</label>
				<select name="idBarrio" id="idBarrio" class="w-100">
<?php
	if($barrio != ''){
?>
					<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
<?php
	}else{
?>
					<option value="0">Seleccione una opcion</option>
<?php
	}	
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
	}else{
?>
					<option value="0">Seleccione una opcion</option>
<?php
	}	
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
	}else{
?>
					<option value="0">Seleccione una opcion</option>
<?php
	}	
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
				<div class="d-inline mx-3">
					<input type="checkbox" name="ambientes" id="ambientes" value="1">
					<label for="ambientes"><?= $ambiente['ambientes'] ?></label>
				</div>
<?php
	}
?>				
			</div>
			<hr>
			<button class="btn btn-danger w-100">Buscar</button>
		</form>
	</div>
</aside>