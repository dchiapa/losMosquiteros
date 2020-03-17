<?php
	include 'html/header.html';
?>
<main id="ppal">
	<h2>Propiedades en venta y en alquiler</h2>
	<h3>El hogar que soñaste a tu alcance</h3>
	<div id="buscar">
		<ul>
			<button id="comprar" data-dato="comprar">Compra</button>
			<button id="alquiler" data-dato="alquiler">Alquiler</button>
			<button id="temporal" data-dato="temporal">Temporal</button>
		</ul>
		<div id="buscar2">
			<select name="propTipo" id="propTipo">
				<option value="">Seleccione una opción</option>
				<!-- 17-03-20 PHP rellenar opciones -->
			</select>
			<input type="text" name="propUbicacion" placeholder="Ingrese un barrio">
			<button>Buscar</button>
		</div>
	</div>
</main>
<?php
	include 'html/footer.html';
?>