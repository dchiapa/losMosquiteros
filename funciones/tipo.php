<?php
		###############################
		#### CRUD DE PROPIEDAD TIPO####

	function listarTipos()
	{
		$link = conectar();
		$sql = "SELECT idTipo, valorTipo FROM tipo";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
 	function agregarUsuario()
	{
		$valorTipo = $_POST['valorTipo'];
    	$link = conectar();
		$sql = "INSERT INTO tipo (valorTipo) VALUES ('".$valorTipo."')";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
	function verUsuarioPorID()
	{
		$idTipo = $_GET['idTipo'];
		$link = conectar();
		$sql = "SELECT valorTipo From tipo WHERE idTipo = ". $idTipo;
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
	function modificarUsuario()
	{
		$idTipo = $_GET['idTipo'];
		$valorTipo = $_POST['valorTipo'];
		$link = conectar();
		$sql = "UPDATE tipo SET valorTipo = '".$valorTipo."' WHERE idTipo = ".$idTipo;
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}
	function eliminarUsuario()
	{
		$valorTipo = $_POST['valorTipo'];
		$link = conectar();
		$sql = "DELETE FROM tipo WHERE valorTipo = '".$valorTipo."'";
		$resultado = mysqli_query($link, $sql) 
					or die(mysqli_error($link));
		return $resultado;
	}
?>