<?php
		#################################
		#### CRUD DE PROPIEDAD ESTADO####

    function listarEstados()
    {
        $link = conectar();
        $sql = "SELECT idEstado, valorEstado FROM estado
                ORDER BY idEstado ASC";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function agregarEstado()
    {
        $valorEstado = $_POST['valorEstado'];
        $link = conectar();
        $sql = "INSERT INTO estado (valorEstado)
                VALUES ('".$valorEstado."')";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function verEstadoPorID()
    {
        $idEstado = $_GET['idEstado'];
        $estado = '';
        if ($idEstado != 0) {
            $link = conectar();
            $sql = "SELECT idEstado, valorEstado From estado
                    WHERE idEstado = ".$idEstado;
            $resultado = mysqli_query($link, $sql)
            or die(mysqli_error($link));
            $estado = mysqli_fetch_assoc($resultado);
        }
        return $estado;
    }

    function verEstadoPorValor()
	{
		$valorEstado = $_POST['valorEstado'];
		$link = conectar();
		$sql = "SELECT idEstado, valorEstado From estado
                WHERE valorEstado = '".$valorEstado."'";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $estado = mysqli_fetch_assoc($resultado);
        return $estado;
    }

    function modificarEstado()
    {
        $idEstado = $_POST['idEstado'];
        $valorEstado = $_POST['valorEstado'];
        $link = conectar();
        $sql = "UPDATE estado SET valorEstado = '".$valorEstado."'
                WHERE idEstado = ".$idEstado;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function estadoEnUso()
    {
        $idEstado = $_GET['idEstado'];
        $link = conectar();
        $sql = "SELECT valorEstado FROM propiedades p, estado e
                WHERE p.idEstado = e.idEstado AND p.idEstado = ".
                $idEstado;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function eliminarEstado()
    {
        $idEstado = $_POST['idEstado'];
        $link = conectar();
        $sql = "DELETE FROM estado
                WHERE idEstado = ".$idEstado;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

?>