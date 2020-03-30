<?php
		###############################
        #### CRUD DE PROPIEDAD ####

function listarPropiedades()
 {
 $link = conectar();
 $sql = "SELECT idPropiedad,
                p.idEstado, valorEstado,
                p.idTipo, valorTipo,
                p.idBarrio, valorBarrio, 
                ambientes, proTitulo,  proDireccion, proPrecio, proDescripcion,
                proDormitorios, proBaños, proSupTotal, proSupCubierta, proSupSemi, proAntiguedad,
                proCocheras, proPileta,proQuincho,proParrilla,proJardin,
                proLuzEle,proAguaCorriente,proAguaPozo,proGasNatural,proGasEmbasado,proCloacas
             
                FROM propiedades p, estado e, tipo t, barrio b
                WHERE p.idEstado = e.idEstado
                AND   p.idTipo= t.idTipo
                AND   p.idBarrio = b.idBarrio";

$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
return $resultado;

 }

function buscarPropiedades()
{
$idEstado = $_GET['idEstado'];
$idTipo = $_GET['idTipo'];
$idBarrio = $_GET['idBarrio'];

$link = conectar();

}