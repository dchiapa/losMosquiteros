<?php 
require 'funciones/config.php';
//vercontenido($prdImagen);
?>
<?php
  function subirArchivo()
  {
    $cantidadArchivos = count($_FILES['prdImagen']['error']);
    $tamañoArchivo = $_FILES['prdImagen']['size'];
    $archivos = array();
    for ($i = 0; $i<$cantidadArchivos; $i++){
   		if ($_FILES['prdImagen']['error'][$i] == 0  ){ 
        $hash = sha1_file($_FILES['prdImagen']['tmp_name'][$i]);
        if (file_exists('productos/'.$hash)) {
          echo "el archivo ya se encuentra en la bibloteca";
        } else {
          $prdImagen = $_FILES['prdImagen']['name'][$i];
     			if(getimagesize($_FILES['prdImagen']['tmp_name'][$i]) && $tamañoArchivo[$i] < 204800 ){
            $ruta = 'productos/';
            $temp = $_FILES['prdImagen']['tmp_name'][$i];
            move_uploaded_file($temp, $ruta.$prdImagen );
            $archivos[] = $prdImagen; //cargo el nombre en una celda del array $archivos
          } else {
            echo "El formato o tamaño del archivo '".$prdImagen."' no es valido <br>";
          }
        }
      }
    }
    return $archivos; 
  }
  $archivos = subirArchivo();
  print_r($archivos);
?>