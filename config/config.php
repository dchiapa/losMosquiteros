<?php   

    session_start(); // habilita una sesion de manera global

    function verContenido($datos)
	{
		echo '<pre>';
		print_r($datos);
		echo '</pre>';
	}