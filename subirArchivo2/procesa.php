<?php 

require 'funciones/config.php';


//vercontenido($prdImagen);

?>

<?php

	function subirArchivo()
{


	  $cantidadArchivos = count($_FILES['prdImagen']['error']);
    $tamañoArchivo = $_FILES['prdImagen']['size'];
    
    $archivos= array();

    for ($i = 0; $i<$cantidadArchivos; $i++){

   		if ($_FILES['prdImagen']['error'][$i] == 0  ){ 

   			    if(getimagesize($_FILES['prdImagen']['tmp_name'][$i]) && $tamañoArchivo[$i] < 204800 ){

              $ruta = 'productos/';
              $prdImagen = $_FILES['prdImagen']['name'][$i];
              $temp = $_FILES['prdImagen']['tmp_name'][$i];
              move_uploaded_file($temp, $ruta.$prdImagen );

              $archivos[]=$prdImagen = $_FILES['prdImagen']['name'][$i]; //cargo el nombre en una celda del array $archivos
            } else {
              $prdImagen = $_FILES['prdImagen']['name'][$i];
              echo "El formato o tamaño del archivo '".$prdImagen."' no es valido <br>";
              
              }
      
      }

    }

    return $archivos; 
 
}

$archivos= subirArchivo();

print_r($archivos);
	 
