<?php
		###########################
        #### CRUD DE PROPIEDAD ####

    function listarPropiedades()
    {

        $link = conectar();
        $sql = "SELECT idPropiedad, p.idEstado, valorEstado,
                    p.idTipo, valorTipo, p.idBarrio, valorBarrio,
                    ambientes, proTitulo, proDireccion, proPrecio,
                    proDescripcion, proDormitorios, proBaños,
                    proSupTotal, proSupCubierta, proSupSemi,
                    proAntiguedad, proCocheras, proPileta,
                    proQuincho, proParrilla, proJardin, proLuzEle,
                    proAguaCorriente, proAguaPozo, proGasNatural,
                    proGasEmbasado, proCloacas
                FROM propiedades p, estado e, tipo t, barrio b
                WHERE p.idEstado = e.idEstado
                AND   p.idTipo= t.idTipo
                AND   p.idBarrio = b.idBarrio ORDER BY idPropiedad
                ASC";
        $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
        return $resultado;
    }

    function buscarPropiedades()
    {
        $idBarrio = $_GET['idBarrio'];
        $idEstado = $_GET['idEstado'];
        $idTipo = $_GET['idTipo'];
        $link = conectar();
        $sql = "SELECT idPropiedad, p.idBarrio, p.idEstado, p.idTipo, b.valorBarrio, e.valorEstado, t.valorTipo
        ambientes, proTitulo, proDireccion, proPrecio,
        proDescripcion, proDormitorios, proBaños,
        proSupTotal, proSupCubierta, proSupSemi,
        proAntiguedad, proCocheras, proPileta,
        proQuincho, proParrilla, proJardin, proLuzEle,
        proAguaCorriente, proAguaPozo, proGasNatural,
        proGasEmbasado, proCloacas  FROM barrio b, estado e, propiedades p, tipo t
        WHERE p.idBarrio = b.idBarrio AND p.idEstado = e.idEstado AND p.idTipo = t.idTipo
        AND p.idBarrio = ".$idBarrio." AND p.idEstado = ".$idEstado." AND p.idTipo = ".$idTipo." ORDER BY idPropiedad ASC";
        $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
        return $resultado;
    }

    function agregarPropiedad()
	{
		$idEstado = $_POST['idEstado'];
		$idTipo = $_POST['idTipo'];
		$idBarrio = $_POST['idBarrio'];
        $ambientes = $_POST['ambientes'];
        $proTitulo = $_POST['proTitulo'];
		$proDireccion = $_POST['proDireccion'];
		$proPrecio = $_POST['proPrecio'];
        $proDescripcion = $_POST['proDescripcion'];
        $proDormitorios = $_POST['proDormitorios'];
        $proBaños = $_POST['proBaños'];
        $proSupTotal = $_POST['proSupTotal'];
        $proSupCubierta = $_POST['proSupCubierta'];
        $proSupSemi = $_POST['proSupSemi'];
        $proAntiguedad = $_POST['proAntiguedad'];
        $proCocheras = $_POST['proCocheras'];
        $proPileta = 0;
        if( isset( $_POST['proPileta'] ) ){
            $proPileta = $_POST['proPileta'];
        }
        $proQuincho = 0;
        if( isset( $_POST['proQuincho'] ) ){
            $proQuincho = $_POST['proQuincho'];
        }
        $proParrilla = 0;
        if( isset( $_POST['proParrilla'] ) ){
            $proParrilla = $_POST['proParrilla'];
        }
        $proJardin = 0;
        if( isset( $_POST['proJardin'] ) ){
            $proJardin = $_POST['proJardin'];
        }
        $proLuzEle = 0;
        if( isset( $_POST['proLuzEle'] ) ){
            $proLuzEle = $_POST['proLuzEle'];
        }
        $proAguaCorriente = 0;
        if( isset( $_POST['proAguaCorriente'] ) ){
            $proAguaCorriente = $_POST['proAguaCorriente'];
        }
        $proAguaPozo = 0;
        if( isset( $_POST['proAguaPozo'] ) ){
            $proAguaPozo = $_POST['proAguaPozo'];
        }
        $proGasNatural = 0;
        if( isset( $_POST['proGasNatural'] ) ){
            $proGasNatural = $_POST['proGasNatural'];
        }
        $proGasEmbasado = 0;
        if( isset( $_POST['proGasEmbasado'] ) ){
            $proGasEmbasado = $_POST['proGasEmbasado'];
        }
        $proGasEmbasado = 0;
        if( isset( $_POST['proGasEmbasado'] ) ){
            $proGasEmbasado = $_POST['proGasEmbasado'];
        }
        $proCloacas = 0;
        if( isset( $_POST['proCloacas'] ) ){
            $proCloacas = $_POST['proCloacas'];
        }
        $idImagenPrincipal = 'noDisponible.jpg';


		$link = conectar();
		$sql ="INSERT INTO propiedades
                      VALUES
                        ( DEFAULT,
                        ".$idEstado.",
                        ".$idTipo.",
                        ".$idBarrio.",
                        ".$ambientes.",
                        '".$proTitulo."',
                        '".$proDireccion."',
                        ".$proPrecio.",
                        '".$proDescripcion."',
                        ".$proDormitorios.",
                        ".$proBaños.",
                        ".$proSupTotal.",
                        ".$proSupCubierta.",
                        ".$proSupSemi.",
                        ".$proAntiguedad.",
                        ".$proCocheras.",
                        ".$proPileta.",
                        ".$proQuincho.",
                        ".$proParrilla.",
                        ".$proJardin.",
                        ".$proLuzEle.",
                        ".$proAguaCorriente.",
                        ".$proAguaPozo.",
                        ".$proGasNatural.",
                        ".$proGasEmbasado.",
                        ".$proCloacas.",
                        '".$idImagenPrincipal."'
                        )";

        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}

    function verPropiedadPorID()
    {
        $idPropiedad =$_GET['idPropiedad'];
        $link = conectar();
        $sql = "SELECT idPropiedad, p.idEstado, valorEstado,
                    p.idTipo, valorTipo, p.idBarrio, valorBarrio,
                    ambientes, proTitulo,  proDireccion, proPrecio,
                    proDescripcion, proDormitorios, proBaños,
                    proSupTotal, proSupCubierta, proSupSemi,
                    proAntiguedad, proCocheras, proPileta,
                    proQuincho,proParrilla, proJardin, proLuzEle,
                    proAguaCorriente,proAguaPozo, proGasNatural,
                    proGasEmbasado,proCloacas
                FROM propiedades p, estado e, tipo t, barrio b
                WHERE p.idEstado = e.idEstado
                AND   p.idTipo= t.idTipo
                AND   p.idBarrio = b.idBarrio
                AND   idPropiedad = ".$idPropiedad;
        $resultado = mysqli_query($link, $sql)
                    or die(mysqli_error($link));
        return mysqli_fetch_assoc($resultado);
    }


    function eliminarPropiedad()
	{
		$idPropiedad = $_POST['idPropiedad'];
		$link = conectar();
		$sql = "DELETE FROM propiedades
				WHERE idPropiedad = ".$idPropiedad;
		$resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
	}
// para agregar a la funcion agregarPropiedad en los tinyint
    function prueba(){

        $proPileta = 0;

        if( isset( $_POST['proPileta'] ) ){
            $proPileta = $_POST['proPileta'];
        }

        return $proPileta;

    }
?>