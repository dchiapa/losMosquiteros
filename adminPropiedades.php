<?php
    require 'funciones/conexion.php';
    require 'config/config.php';
    require 'funciones/usuarios.php';
	$usuario = autenticarInvitado();
    require 'funciones/propiedad.php';
    include 'includes/header.html';
    $propiedades = listarPropiedades();
?>
<body>
    <main id="adminPropiedades">
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
        <div class="col-12 mx-auto">
            <h2 class="d-block text-center my-5">Panel de administración de propiedades</h2>
            <div class="row mx-auto">
                <div class="col-10 mx-auto">
                    <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
                    <table class="table table-hover table-border table-striped">
                        <thead class="thead-dark">
        	            	<tr>
                                <th class=" text-center">Id</th>
                                <th class=" text-center">Estado</th>
                                <th class=" text-center">Tipo</th>
                                <th class=" text-center">Barrio</th>
                                <th class=" text-center">Ambientes</th>

                                <th class=" text-center">Dirección</th>


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

                                <td class=" text-center"><?= $propiedad['proDireccion'] ?></td>



                                <td>
	    		            		<a href="verFichaPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary ">Ficha </a>
                                </td>
                                <td>
	    		            		<a href="formModificarPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Modificar</a>
                                </td>
	    		            	<td>
	    		            		<a href="formEliminarPropiedad.php?idPropiedad=<?= $propiedad['idPropiedad'] ?>" class="btn btn-outline-secondary">Eliminar</a>
                                </td>
                            </tr>
<?php
    }
?>
                        </tbody>
                    </table>
                    <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
                </div>
            </div>
        </div>
    </main>
<?php
	include 'includes/footer.html';
?>