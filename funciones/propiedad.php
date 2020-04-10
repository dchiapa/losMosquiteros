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
        $ambientes = $_GET['ambientes'];
        $antiguedad = $_GET['proAntiguedad'];
        $baños = $_GET['proBaños'];
        $cocheras = $_GET['proCocheras'];
        $dormitorios = $_GET['proDormitorios'];    
        $buscar = "";
        switch ($idBarrio) {
            case 0:
                $buscar = $buscar."";
                break;
 
            default:
                $buscar = $buscar." AND p.idBarrio =  $idBarrio";
                break;
        }
        switch ($idEstado) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.idEstado =  $idEstado";
                break;
        }
        switch ($idTipo) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.idTipo =  $idTipo";
                break;
        }
        switch ($ambientes) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.ambientes =  $ambientes";
                break;
        }
        switch ($antiguedad) {
            case '0':
                $buscar = $buscar."";
                break;
            case '<10':
                $buscar = $buscar. " AND p.proAntiguedad < 10";
                break;
            case '<30':
                $buscar = $buscar. " AND p.proAntiguedad > 10 AND p.proAntiguedad < 30";
                break;
            case '<50':
                $buscar = $buscar. " AND p.proAntiguedad > 30 AND p.proAntiguedad < 50";
                break;
            case '>50':
                $buscar = $buscar. " AND p.proAntiguedad > 50";
                break;
        }
        switch ($baños) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.proBaños =  $baños";
                break;
        }
        switch ($cocheras) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.proCocheras =  $cocheras";
                break;
        }
        switch ($dormitorios) {
            case '0':
                $buscar = $buscar."";
                break;
            
            default:
                $buscar = $buscar." AND p.proDormitorios =  $dormitorios";
                break;
        }
        
        $link = conectar();
        $sql = "SELECT idPropiedad, p.idBarrio, b.valorBarrio,
		            p.idEstado, e.valorEstado, p.idTipo, t.valorTipo,
                    ambientes, proTitulo,  proDireccion, proPrecio,
                    proDescripcion, proBaños,
                    proSupTotal, proSupCubierta, proCocheras, idImagenPrincipal
                FROM propiedades p, barrio b, estado e, tipo t WHERE p.idBarrio = b.idBarrio AND p.idEstado = e.idEstado AND p.idTipo = t.idTipo ".$buscar."
                ORDER BY b.valorBarrio ASC";
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
        $idImagenPrincipal = 0;


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
        $sql = "SELECT idPropiedad, p.idEstado, e.valorEstado,
                    p.idTipo, t.valorTipo, p.idBarrio, b.valorBarrio,
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

    function modificarPropiedad()
	{
        $idPropiedad  = $_POST['idPropiedad'];
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
		$sql ="UPDATE propiedades SET

                    idEstado = ".$idEstado.",
                        idTipo = ".$idTipo.",
                        idBarrio = ".$idBarrio.",
                        ambientes = ".$ambientes.",
                        proTitulo = '".$proTitulo."',
                        proDireccion = '".$proDireccion."',
                        proPrecio = ".$proPrecio.",
                        proDescripcion = '".$proDescripcion."',
                        proDormitorios = ".$proDormitorios.",
                        proBaños = ".$proBaños.",
                        proSupTotal = ".$proSupTotal.",
                        proSupCubierta = ".$proSupCubierta.",
                        proSupSemi = ".$proSupSemi.",
                        proAntiguedad = ".$proAntiguedad.",
                        proCocheras = ".$proCocheras.",
                        proPileta = ".$proPileta.",
                        proQuincho = ".$proQuincho.",
                        proParrilla = ".$proParrilla.",
                        proJardin = ".$proJardin.",
                        proLuzEle = ".$proLuzEle.",
                        proAguaCorriente = ".$proAguaCorriente.",
                        proAguaPozo = ".$proAguaPozo.",
                        proGasNatural = ".$proGasNatural.",
                        proGasEmbasado = ".$proGasEmbasado.",
                        proCloacas = ".$proCloacas.",
                        idImagenPrincipal = '".$idImagenPrincipal."'
                        WHERE idPropiedad = ".$idPropiedad;

        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
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

    ###################################
    ###########   FILTROS   ###########


    function listarAmbientes()
    {
        $link = conectar();
        $sql = "SELECT DISTINCT ambientes FROM propiedades ORDER BY ambientes ASC";
        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function listarAntiguedades()
    {
        $link = conectar();
        $sql = "SELECT DISTINCT proAntiguedad FROM propiedades ORDER BY proAntiguedad ASC";
        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function listarBaños()
    {
        $link = conectar();
        $sql = "SELECT DISTINCT proBaños FROM propiedades ORDER BY proBaños ASC";
        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function listarCocheras()
    {
        $link = conectar();
        $sql = "SELECT DISTINCT proCocheras FROM propiedades ORDER BY proCocheras ASC";
        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
    function listarDormitorios()
    {
        $link = conectar();
        $sql = "SELECT DISTINCT proDormitorios FROM propiedades ORDER BY proDormitorios ASC";
        $resultado = mysqli_query($link, $sql)
					or die(mysqli_error($link));
		return $resultado;
    }
