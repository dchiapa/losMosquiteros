<?php
	############################
	#### RUTINA DE CONEXION ####
	
	define('SERVER', 'localhost');
	define('USUARIO', 'root');
	define('CLAVE', '');
	define('BASE', 'inmobiliaria');

	function conectar()
	{
		$link = mysqli_connect(SERVER, USUARIO, CLAVE, BASE);
		return $link;
	}
?>