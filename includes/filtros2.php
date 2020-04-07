<aside class="col-3 mx-auto">
    <div class=" card px-4 mx-auto shadow">
		<div class="filtrosActivos">
    		<h2 class="text-center">Filtros activos</h2>
<?php
	if($barrio != ''){
?>
			<button class=" btnFiltro btn btn-primary my-2 w-100" id="idBarrio" value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></button>
<?php
	}
	if($estado != ''){
?>
			<button class=" btnFiltro btn btn-primary my-2 w-100" id="idEstado" value="<?= $estado['idEstado'] ?>"><?= $estado['valorEstado'] ?></button>
<?php
}
	if($tipo != ''){
?>
			<button class=" btnFiltro btn btn-primary my-2 w-100" id="idTipo" value="<?= $tipo['idTipo'] ?>"><?= $tipo['valorTipo'] ?></button>
<?php
}
?>
           	<button class=" btn btn-danger my-2 w-100" id="btnLimpiar">Limpiar</button>
    	</div>
		<hr>
		<div id="filtros">
	        <div>
				<h5 class=" d-inline mr-5">Barrio</h5>
				<p class="desFiltro d-inline ml-5 " value="0"> ▼ </p>
				<div class="d-none">
					<select name="idBarrio" id="idBarrio" class="border border-dark rounded p-2 mx-2">
<?php
	if($barrio == ''){
?>								
			    		<option value="0"> Seleccione una opción</option>
<?php
	}else{
?>
						<option value="<?= $barrio['idBarrio'] ?>"> <?= $barrio['valorBarrio'] ?></option>

<?php
	}
   	while ($barrio = mysqli_fetch_assoc($barrios)) {
?>
    					<option value="<?= $barrio['idBarrio'] ?>"><?= $barrio['valorBarrio'] ?></option>
<?php
	}
?>
					</select>
				</div>
			</div>
			<div>
				<h5 class=" d-inline mr-5">Estado</h5>
				<p class="desFiltro d-inline ml-5 " value="0"> ▼ </p>
				<div class="d-none">
					<ul>
						<li>item 1</li>
						<li>item 2</li>
						<li>item 3</li>
					</ul>
				</div>
			</div>
			<div>
				<h5 class=" d-inline mr-5">Tipo</h5>
				<p class="desFiltro d-inline ml-5 " value="0"> ▼ </p>
				<div class="d-none">
					<ul>
						<li>item 1</li>
						<li>item 2</li>
						<li>item 3</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</aside>