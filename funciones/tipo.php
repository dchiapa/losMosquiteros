<?php
		#################################
		#### CRUD DE PROPIEDAD ESTADO####

        function listarTipos()
        {
            $link = conectar();
            $sql = "SELECT idTipo, valorTipo FROM tipo";
            $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
            return $resultado;
        }
        function agregarTipo()
        {
            $valorTipo = $_POST['valorTipo'];
            $link = conectar();
            $sql = "INSERT INTO tipo (valorTipo) VALUES ('".$valorTipo."')";
            $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
            return $resultado;
        }
        function verTipoPorID()
        {
            $idTipo = $_GET['idTipo'];
            $link = conectar();
            $sql = "SELECT idTipo, valorTipo From tipo WHERE idTipo = ". $idTipo;
            $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
            $marca = mysqli_fetch_assoc($resultado);
            return $marca;
        }
        function modificarTipo()
        {
            $idTipo = $_POST['idTipo'];
            $valorTipo = $_POST['valorTipo'];
            $link = conectar();
            $sql = "UPDATE tipo SET valorTipo = '".$valorTipo."' WHERE idTipo = ".$idTipo;
            $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
            return $resultado;
        }
        // 28-03 chequear tipoEnUSO //
        function tipoEnUso()
        {
            $idTipo = $_GET['idTipo'];
            $link = conectar();
            $sql = "SELECT valorEstado FROM productos p, tipo m 
                    WHERE p.idTipo = m.idTipo AND p.idTipo = ".$idTipo;
            $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
            $cantidad = mysqli_num_rows($resultado);
            return $cantidad;
        }
        function eliminarTipo()
        {
            $idTipo = $_POST['idTipo'];
            $link = conectar();
            $sql = "DELETE FROM tipo WHERE idTipo = ".$idTipo;
            $resultado = mysqli_query($link, $sql) 
                        or die(mysqli_error($link));
            return $resultado;
        }
?>