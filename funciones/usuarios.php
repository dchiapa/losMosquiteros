<?php
		###################################
		#### CRUD DE PROPIEDAD USUARIOS####

	function listarUsuarios()
	{
		$link = conectar();
		$sql = "SELECT idUsuario, usuNombre, usuApellido,
					usuEmail, usuPass, usuEstado
				FROM usuarios ORDER BY idUsuario ASC";
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}

 	function agregarUsuario()
	{
		$usuNombre = $_POST['usuNombre'];
		$usuApellido = $_POST['usuApellido'];
		$usuEmail = $_POST['usuEmail'];
		$usuPass = $_POST['usuPass'];
		$usuEstado = 1;
		$link = conectar();
		$sql = "INSERT INTO usuarios (usuNombre, usuApellido,
					usuEmail, usuPass, usuEstado)
				VALUES ('".$usuNombre."', '".$usuApellido."', '".
					$usuEmail."', '".$usuPass."', '".$usuEstado."')";
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}

	function verUsuarioPorID()
	{
		$idUsuario = $_GET['idUsuario'];
		$link = conectar();
		$sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, 			usuPass, usuEstado  From usuarios
				WHERE idUsuario = ". $idUsuario;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		$usuario = mysqli_fetch_assoc($resultado);
		return $usuario;
	}

	function verUsuarioPorValor()
	{
		$usuEmail= $_POST['usuEmail'];
		$link = conectar();
<<<<<<< HEAD
		$sql = "SELECT idUsuario, usuNombre From usuarios WHERE usuEmail = '". $usuEmail."'";
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
=======
		$sql = "SELECT idUsuario, valorUsuario From usuario
				WHERE valorUsuario = ". $valorUsuario;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
>>>>>>> 43bbdf64b3cf48464004a49cb90d322007b4508f
		return mysqli_fetch_assoc($resultado);
	}

	function modificarUsuario()
	{
		$idUsuario = $_POST['idUsuario'];
		$usuNombre = $_POST['usuNombre'];
		$usuApellido = $_POST['usuApellido'];
		$usuEmail = $_POST['usuEmail'];
		$usuPass = $_POST['usuPass'];
		$usuEstado = $_POST['usuEstado'];
		$link = conectar();
		$sql = "UPDATE usuarios
				SET usuNombre = '".$usuNombre."',
					usuApellido = '".$usuApellido."',
		 			usuEmail = '".$usuEmail."',
		   			usuPass = '".$usuPass."',
		  			usuEstado = '".$usuEstado."'
				WHERE idUsuario = ".$idUsuario;
		$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
		return $resultado;
	}

	function eliminarUsuario()
	{
		$idUsuario = $_POST['idUsuario'];
		$link = conectar();
		$sql = "DELETE FROM usuarios
				WHERE idUsuario =".$idUsuario;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}
?>