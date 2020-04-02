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
                AND   p.idBarrio = b.idBarrio ORDER BY idPropiedad ASC";

$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
return $resultado;

 }

function verPropiedadPorID()
{
$idPropiedad =$_GET['idPropiedad'];
/*$idEstado = $_GET['idEstado'];
$idTipo = $_GET['idTipo'];
$idBarrio = $_GET['idBarrio'];
*/
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
                AND   p.idBarrio = b.idBarrio
                AND   idPropiedad = ".$idPropiedad;

$resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));

return mysqli_fetch_assoc($resultado);

}