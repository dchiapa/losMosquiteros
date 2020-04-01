<?php
    require 'funciones/conexion.php';
    require 'funciones/propiedad.php';
    include 'html/header.html';
    $propiedades = listarPropiedades();
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
            <h2 class="d-block text-center my-5">Panel de administración de propiedades</h2>
            <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
            <table class="table table-hover table-border table-striped">
                <thead class="thead-dark">
        	    	<tr>
                        <th class=" text-center">Id</th>
                        <th class=" text-center">Estado</th>
                        <th class=" text-center">Tipo</th>
                        <th class=" text-center">Barrio</th>
                        <th class=" text-center">Ambientes</th>
                        <th class=" text-center">Título</th>
                        <th class=" text-center">Dirección</th>
                        <th class=" text-center">Precio</th>
                        <th class=" text-center">Descripción</th>
                        <th class=" text-center">Dormitorios</th>
                        <th class=" text-center">Baños</th>
                        <th class=" text-center">Superficie</th>
                        <th class=" text-center">Cocheras</th>
                        <th class=" text-center">Adicionales</th>
                        <th class=" text-center">Servicios</th>

        	        	<th colspan="3">
        	        		<a href="formAgregarPropiedad.php" class="btn btn-secondary">Agregar</a>
        	    		</th>
        	    	</tr>
                </thead>
                <tbody>
<?php
    while($propiedad = mysqli_fetch_assoc($propiedades)){
?>
                    <tr>
                        <td class=" text-center"><?= $propiedad['idPropiedad'] ?></td>
                        <td class=" text-center"><?= $propiedad['valorEstado'] ?></td>
                        <td class=" text-center"><?= $propiedad['valorTipo'] ?></td>
                        <td class=" text-center"><?= $propiedad['valorBarrio'] ?></td>
                        <td class=" text-center"><?= $propiedad['ambientes'] ?></td>
                        <td class=" text-center"><?= $propiedad['proTitulo'] ?></td>
                        <td class=" text-center"><?= $propiedad['proDireccion'] ?></td>
                        <td class=" text-center"><?= $propiedad['proPrecio'] ?></td>
                        <td class=" text-center">
                            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver </button>
                                    <div class="dropdown-menu" aria-labelledby="Descripcion" id="descri">
                                    <p><?= $propiedad['proDescripcion'] ?></p>
                                    </div>
                            </div>
                        </td>
                        <td class=" text-center"><?= $propiedad['proDormitorios'] ?></td>
                        <td class=" text-center"><?= $propiedad['proBaños'] ?></td>
                        <td class=" text-center">
                            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver </button>
                                    <div class="dropdown-menu" aria-labelledby="Descripcion" id="descri">
                                    <p>Total: <?= $propiedad['proSupTotal'] ?> m2</p>
                                    <p>Cubierta: <?= $propiedad['proSupCubierta'] ?> m2</p>
                                    <p>Semi: <?= $propiedad['proSupSemi'] ?> m2</p>
                                    </div>
                            </div>
                        </td>
                        <td class=" text-center"><?= $propiedad['proCocheras'] ?></td>
                        <td class=" text-center">
                            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver </button>
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
                        </td>

                        <td class=" text-center">
                            <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver </button>
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
                        </td>


                        <td>
	    		    		<a href="formModificarPropiedad.php?idUsuario=<?= $popiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Modificar</a>
                        </td>
	    		    	<td>
	    		    		<a href="formEliminarPropiedad.php?idUsuario=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Eliminar</a>
                        </td>
                    </tr>
<?php
    }
?>
                </tbody>
            </table>
            <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
        </div>
    </main>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="Descripcion">
    <p><?= $propiedad['proDescripcion'] ?></p>
  </div>
</div>





<?php
	include 'html/footer.html';
?>