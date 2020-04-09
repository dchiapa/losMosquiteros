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

?>