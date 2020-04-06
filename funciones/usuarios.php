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
				VALUES ('".$usuNombre."', '".$usuApellido."', '".$usuEmail."', '".$usuPass."', '".$usuEstado."')";
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
		$sql = "SELECT idUsuario, usuNombre From usuarios
				WHERE usuEmail = '".$usuEmail."'";
		$resultado = mysqli_query($link, $sql)
			or die(mysqli_error($link));
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
				WHERE idUsuario = ".$idUsuario;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}


        ###################################
		############ LOGIN ################

		function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuEmail, usuEstado, usuTipo
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                     AND  usuPass  = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link) );
		
		$tipoUsuario = mysqli_fetch_assoc($resultado);
        $cantidad = mysqli_num_rows($resultado);


        if( $cantidad == 0 ){ // no hay coincidencia
			//redirección a formLogin
			session_unset();
			session_destroy();
            header('location: formLogin.php?error=1');
        }
        else{
            if($tipoUsuario['usuTipo'] == 'admin'){
				$_SESSION['loginAdmin'] = 1;

				header('location: admin.php');
			} else {
				$_SESSION['loginInvitado'] = 2;

				header('location: admin.php');

			}

            
            
        }
    }

function autenticarAdmin()
{
	if(!isset($_SESSION['loginAdmin'])) {
		header('location: formLogin.php?errorAut=2');
	}
}

function autenticarInvitado()
{
	if (!isset($_SESSION['loginAdmin']) && !isset($_SESSION['loginInvitado'])){
		header('location: formLogin.php?errorAut=2');
	}
}

