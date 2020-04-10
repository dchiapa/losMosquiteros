<?php
		#################################
        #### CRUD DE PROPIEDAD IMAGEN####

    function listarImagenes()
    {
        $link = conectar();
        $sql = "SELECT idImagen, idPropiedad, imgNombre FROM imagenes
                ORDER BY idImagen ASC";
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function listarImagenesPropiedad()
    {
        $idPropiedad = $_GET['idPropiedad'];
        $link = conectar();
        $sql = "SELECT idImagen, idPropiedad, imgNombre FROM imagenes
                WHERE idPropiedad = $idPropiedad ORDER BY idImagen ASC";
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function buscarImagenPrincipal($idImagenPrincipal)
    {
        $link = conectar();
        $sql = "SELECT imgNombre FROM imagenes
                WHERE idImagen = $idImagenPrincipal";
		$resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $imagen = mysqli_fetch_assoc($resultado);
		return $imagen;
    }
    function cargarImagenPrincipal($idPropiedad){
        $link = conectar();
        $sql = "SELECT idImagen FROM imagenes WHERE idPropiedad = $idPropiedad Limit 1";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $imagen = mysqli_fetch_assoc($resultado);
        $idImagen = $imagen['idImagen'];
        if (count($imagen) != 0) {
            $sql = "UPDATE propiedades SET idImagenPrincipal = $idImagen
                WHERE idPropiedad = $idPropiedad";
            $resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        }
        return $resultado;            
    }
    function subirArchivos()
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
                        $ruta = 'img/';
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

    function agregarImagenes()
    {
        $idPropiedad =$_POST['idPropiedad'];
        $imgNombre = subirArchivos() ; // array de los nombres de los archivos.
        $cantidad = count($imgNombre);
        $link = conectar();
        for($i = 0; $i<$cantidad; $i++){
            $sql = $sql = "INSERT INTO imagenes (idPropiedad, imgNombre)
                            VALUES (".$idPropiedad.", '".$imgNombre[$i]."')";
            $resultadoPrincipal = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        }
        cargarImagenPrincipal($idPropiedad);
        return $resultadoPrincipal;
    }
?>

