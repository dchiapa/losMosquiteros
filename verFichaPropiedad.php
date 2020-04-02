<?php
    require 'funciones/conexion.php';
    require 'funciones/propiedad.php';
    include 'html/header.html';
    $propiedad = verPropiedadPorID();
?>
<body>
    <main id="adminUsuarios">
        <header class="card-header border-0">
            <img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
            <h1 class="d-none">Los Mosquiteros</h1>
            <nav>
                <ul>
        	 	    <li class="d-inline"><a href="index.php" class="btn btn-outline-light py-2 px-5">Inicio</a></li>
        	 	    <li class="d-inline"><a href="" class="btn btn-outline-light py-2 px-5">Publicar</a></li>
        	 	    <li class="d-inline"><a href="admin.php" class="btn btn-outline-light py-2 px-5">LogIn</a></li>
                </ul>
            </nav>
        </header>
        <div class="col-6 mx-auto">
            <h2 class="d-block text-center my-5">Ficha completa</h2>
            <a href="adminPropiedades.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
            
            
            <div class="row">
            <div class="card" style="width: 10rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Id: <?= $propiedad['idPropiedad'] ?></li>
                    <li class="list-group-item">Estado: <?= $propiedad['valorEstado'] ?> </li>
                    <li class="list-group-item">Tipo: <?= $propiedad['valorTipo'] ?></li>
                    <li class="list-group-item">Barrrio: <?= $propiedad['valorBarrio'] ?></li>
                                    
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item">Ambientes: <?= $propiedad['ambientes'] ?></li>
                    <li class="list-group-item">Título: <?= $propiedad['proTitulo'] ?></li>
                    <li class="list-group-item">Dirección: <?= $propiedad['proDireccion'] ?></li>
                    <li class="list-group-item">Precio: <?= $propiedad['proPrecio'] ?></li>
                    
                </ul>
            </div>

            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item">Dormitorios: <?= $propiedad['proDormitorios'] ?></li>
                    <li class="list-group-item">Baños: <?= $propiedad['proBaños'] ?></li>
                    <li class="list-group-item">Antiguedad: <?= $propiedad['proAntiguedad'] ?> años</li>
                    <li class="list-group-item">Cocheras: <?= $propiedad['proCocheras'] ?></li>
                    
                </ul>
            </div>
            </div>

            <div class="card-body">
                 <li class="list-group-item"><strong>Descripción:</strong> <?= $propiedad['proDescripcion'] ?></li>  
            </div>

        <div class="row">
            <div class="dropdown">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Superficie</button>
                 <div class="dropdown-menu" aria-labelledby="Descripcion" id="descri">
                 <p>Total: <?= $propiedad['proSupTotal'] ?> m2</p>
                 <p>Cubierta: <?= $propiedad['proSupCubierta'] ?> m2</p>
                 <p>Semi: <?= $propiedad['proSupSemi'] ?> m2</p>
                </div>
            </div>

            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adicionales </button>
                                    <div class="dropdown-menu" aria-labelledby="Descripcion" id="descri">
                                    <?php
                                    if($propiedad['proPileta'] == 1){
                                    ?>    
                                        <p>Pileta</p>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proQuincho'] == 1){
                                    ?>    
                                        <p>Quincho</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proParrilla'] == 1){
                                    ?>    
                                        <p>Parrilla</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proJardin'] == 1){
                                    ?>    
                                        <p>Jardin</p>
                                        <?php
                                    }
                                    ?>
                                                             
                                    </div>
                            </div>
                            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Servicios </button>
                                    <div class="dropdown-menu" aria-labelledby="Descripcion" id="descri">
                                    <?php
                                    if($propiedad['proLuzEle'] == 1){
                                    ?>    
                                        <p>Luz electrica</p>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proAguaCorriente'] == 1){
                                    ?>    
                                        <p>Agua corriente</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proAguaPozo'] == 1){
                                    ?>    
                                        <p>Agua de pozo</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proGasNatural'] == 1){
                                    ?>    
                                        <p>Gas natural</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proGasEmbasado'] == 1){
                                    ?>    
                                        <p>Gas embasado</p>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if($propiedad['proCloacas'] == 1){
                                    ?>    
                                        <p>Cloacas</p>
                                        <?php
                                    }
                                    ?>
                                                             
                                    </div>
                            </div>           
                 </div>                   
               
	    	<a href="formModificarPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Modificar</a>                
	    		    	
	    	<a href="formEliminarPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Eliminar</a>
                           
            <a href="adminPropiedades.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
        </div>
    </main>





<?php
	include 'html/footer.html';
?>