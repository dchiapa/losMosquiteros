<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
	require 'funciones/estado.php';
    require 'funciones/barrio.php';
    require 'funciones/propiedad.php';
	$tipos = listarTipos();
	$estados = listarEstados();
    $barrios = listarBarrios();
    $propiedades = listarPropiedades();
	include 'html/header2.html';
?>