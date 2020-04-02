<?php
        ###############################
        #### CRUD DE PROPIEDAD TIPO####

    function listarTipos()
    {
        $link = conectar();
        $sql = "SELECT idTipo, valorTipo FROM tipo
                ORDER BY idTipo ASC";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function agregarTipo()
    {
        $valorTipo = $_POST['valorTipo'];
        $link = conectar();
        $sql = "INSERT INTO tipo (valorTipo)
                VALUES ('".$valorTipo."')";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

    function verTipoPorID()
    {
        $idTipo = $_GET['idTipo'];
        $link = conectar();
        $sql = "SELECT idTipo, valorTipo From tipo
                WHERE idTipo = ". $idTipo;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $tipo = mysqli_fetch_assoc($resultado);
        return $tipo;
    }

    function verTipoPorValor()
    {
    	$valorTipo = $_POST['valorTipo'];
    	$link = conectar();
    	$sql = "SELECT idTipo, valorTipo From tipo
                WHERE valorTipo = '". $valorTipo."'";
        $resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $tipo = mysqli_fetch_assoc($resultado);
    	return $tipo;
    }

    function modificarTipo()
    {
        $idTipo = $_POST['idTipo'];
        $valorTipo = $_POST['valorTipo'];
        $link = conectar();
        $sql = "UPDATE tipo SET valorTipo = '".$valorTipo."'
                WHERE idTipo = ".$idTipo;
        $resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        return $resultado;
    }

    function tipoEnUso()
    {
        $idTipo = $_GET['idTipo'];
        $link = conectar();
        $sql = "SELECT valorTipo FROM propiedades p, tipo t
                WHERE p.idTipo = t.idTipo AND p.idTipo = ".
                $idTipo;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function eliminarTipo()
    {
        $idTipo = $_POST['idTipo'];
        $link = conectar();
        $sql = "DELETE FROM tipo
                WHERE idTipo = ".$idTipo;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return $resultado;
    }

?>