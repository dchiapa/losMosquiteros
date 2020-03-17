<?php
	include 'html/header.html';
?>
<main>
	<h2>Propiedades en venta y en alquiler</h2>
	<h3>El hogar que soñaste a tu alcance</h3>
	<ul>
		<li><button id="comprar" data-dato="comprar">Compra</button></li>
		<li><button id="alquiler" data-dato="alquiler">Alquiler</button></li>
		<li><button id="temporal" data-dato="temporal">Temporal</button></li>
	</ul>
	<select name="propTipo" id="propTipo">
		<option value="">Seleccione una opción</option>
		<!-- 17-03-20 PHP rellenar opciones -->
	</select>
	<input type="text" name="propUbicacion" placeholder="Ingrese un barrio">
	<button>Buscar</button>
</main>
<?php
	include 'html/footer.html';
?>