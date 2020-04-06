<?php
    require 'funciones/conexion.php';
    require 'config/config.php';
    require 'funciones/usuarios.php';
    autenticarAdmin();
    require 'funciones/barrio.php';
    include 'html/header.html';
    $barrios = listarBarrios();
?>
<body>
    <main id="adminBarrios">
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
            <h2 class="d-block text-center my-5">Panel de administración de barrios</h2>
            <div class="row mx-auto">
                <div class="col-10 mx-auto">
                    <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
                    <table class="table table-hover table-border table-striped">
                        <thead class="thead-dark">
        	    	        <tr>
                                <th class=" text-center">Id</th>
        	    	        	<th class=" text-center">Barrio</th>
        	                	<th colspan="3">
        	                		<a href="formAgregarBarrio.php" class="btn btn-secondary">Agregar</a>
        	            		</th>
        	            	</tr>
                        </thead>
                        <tbody>
<?php
    while($barrio = mysqli_fetch_assoc($barrios)){
?>
                            <tr>
                             <td class=" text-center"><?= $barrio['idBarrio'] ?></td>
                                <td class=" text-center"><?= $barrio['valorBarrio'] ?></td>
                                <td>
	    		    	    	    <a href="formModificarBarrio.php?idBarrio=<?= $barrio['idBarrio'] ?>" class="btn btn-outline-secondary">Modificar</a>
                                </td>
	    		    	        <td>
	    		    	    	    <a href="formEliminarBarrio.php?idBarrio=<?= $barrio['idBarrio'] ?>" class="btn btn-outline-secondary">Eliminar</a>
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
	include 'html/footer.html';
?>