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

    function buscarPropiedades($barrio)
    {
        $idBarrio = $barrio;
        $idEstado = $_GET['idEstado'];
        $idTipo = $_GET['idTipo'];
        $link = conectar();
        $sql = "SELECT idPropiedad, p.idEstado, e.valorEstado,
                    p.idTipo, t.valorTipo, p.idBarrio, b.valorBarrio,
                    ambientes, proTitulo, proDireccion, proPrecio,
                    proDescripcion, proDormitorios, proBaños,
                    proSupTotal, proSupCubierta, proSupSemi,
                    proAntiguedad, proCocheras, proPileta,
                    proQuincho, proParrilla, proJardin, proLuzEle,
                    proAguaCorriente, proAguaPozo, proGasNatural,
                    proGasEmbasado, proCloacas
                FROM propiedades p, estado e, tipo t, barrio b
                WHERE p.idEstado = ".$idEstado."
                AND   p.idTipo = ".$idTipo."
                AND   p.idBarrio = ".$idBarrio." ORDER BY idPropiedad
                ASC";
        $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
        return $resultado;
    }

    function agregarPropiedad()
	{
		$idEstado = $_POST['idEstado'];
		$idTipo = $_POST['idTipo'];
		$idBarrio = $_POST['idBarrio'];
        $ambientes = $_POST['ambientes
        '];
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
        $proPileta = $_POST['proPileta'];
        $proQuincho = $_POST['proQuincho'];
        $proParrilla = $_POST['proParrilla'];
        $proJardin = $_POST['proJardin'];
        $proLuzEle = $_POST['proLuzElec'];
        $proAguaCorriente = $_POST['proAguaCorriente'];
        $proAguaPozo = $_POST['proAguaPozo'];
        $proGasNatural = $_POST['proGasNatural'];
        $proGasEmbasado = $_POST['proGasEmbasado'];
        $proClocas = $_POST['proClocas'];


		$link = conectar();
		$sql ="INSERT INTO productos
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
                        ".$proClocas."
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

?>