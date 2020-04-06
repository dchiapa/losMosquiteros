<?php
		#################################
        #### CRUD DE PROPIEDAD BARRIO####

    function listarBarrios()
    {
        $link = conectar();
        $sql = "SELECT idBarrio, valorBarrio FROM barrio
				ORDER BY idBarrio ASC";
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}

	function agregarBarrio()
    {
    	$valorBarrio = $_POST['valorBarrio'];
    	$link = conectar();
    	$sql = "INSERT INTO barrio (valorBarrio)
				VALUES ('".$valorBarrio."')";
		$resultado = mysqli_query($link, $sql)
			or die(mysqli_error($link));
    	return $resultado;
	}

	function verBarrioPorID()
	{
		$idBarrio = $_GET['idBarrio'];
		$barrio = '';
		if ($idBarrio != 0) {
			$link = conectar();
			$sql = "SELECT idBarrio, valorBarrio From barrio
					WHERE idBarrio = ".$idBarrio;
			$resultado = mysqli_query($link, $sql)
						or die(mysqli_error($link));
			$barrio = mysqli_fetch_assoc($resultado);
		}
		return $barrio;
	}

    function verBarrioPorValor()
	{
		$valorBarrio = $_POST['valorBarrio'];
		$link = conectar();
		$sql = "SELECT idBarrio, valorBarrio From barrio
				WHERE valorBarrio = '".$valorBarrio."'";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		$barrio = mysqli_fetch_assoc($resultado);
		return $barrio;
	}

    function modificarBarrio()
	{
		$idBarrio= $_POST['idBarrio'];
		$valorBarrio = $_POST['valorBarrio'];
		$link = conectar();
		$sql = "UPDATE barrio SET valorBarrio = '".$valorBarrio."'
				WHERE idBarrio = ".$idBarrio;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }

	function barrioEnUso()
    {
        $idBarrio = $_GET['idBarrio'];
        $link = conectar();
        $sql = "SELECT valorBarrio FROM propiedades p, barrio b
				WHERE p.idBarrio = b.idBarrio AND p.idBarrio = ".
				$idBarrio;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function eliminarBarrio()
	{
		$idBarrio = $_POST['idBarrio'];
		$link = conectar();
		$sql = "DELETE FROM barrio
				WHERE idBarrio = ".$idBarrio;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}

?>