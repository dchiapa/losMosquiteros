<?php 

require 'funciones/config.php';


//vercontenido($prdImagen);

?>

<?php



  

	function subirArchivo()
{


	$cantidadArchivos = count($_FILES['prdImagen']['error']);
    
    $archivos= array();

    for ($i = 0; $i<$cantidadArchivos; $i++){

   		if ($_FILES['prdImagen']['error'][$i] == 0  ){ 

   			$ruta = 'productos/';
            $prdImagen = $_FILES['prdImagen']['name'][$i];
            $temp = $_FILES['prdImagen']['tmp_name'][$i];
            move_uploaded_file($temp, $ruta.$prdImagen );

          $archivos[]=$prdImagen = $_FILES['prdImagen']['name'][$i]; //cargo el nombre en una celda del array $archivos
      }
    }

    return $archivos; 
 
}

$archivos= subirArchivo();

print_r($archivos);
	 
