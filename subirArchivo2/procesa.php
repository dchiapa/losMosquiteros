<?php 

require 'funciones/config.php';


//vercontenido($prdImagen);

?>

<?php
  

	function subirArchivo()
{


	$archivos = $_FILES['prdImagen']['error'];

    foreach ($archivos as $elementos) {
    	if ($archivos[$elementos] == 0 ){ 

			$ruta = 'productos/'; // ruta final del archivo
			$prdImagen = $_FILES['prdImagen']['name'][$elementos]; // para que suba con el nombre del archivo
			$temp = $_FILES['prdImagen']['tmp_name'][$elementos];  // archivo en la carpeta temporal
			move_uploaded_file($temp, $ruta.$prdImagen);  // trae el archivo de temp lo envia a la ruta ycambia nombre por $prdimage
		}
		return $prdImagen; 
  
}

subirArchivo();

	 
