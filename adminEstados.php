<?php
    require 'funciones/conexion.php';
    require 'funciones/estado.php';
    include 'html/header.html';
    $estados = listarEstados();
?>
<body>
    <main id="adminEstados">
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
            <h2 class="d-block text-center my-5">Panel de administración de estados</h2>
            <div class="row mx-auto">
                <div class="col-6 mx-auto">
                    <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
                    <table class="table table-hover table-border table-striped">
                        <thead class="thead-dark">
        	            	<tr>
                                <th class=" text-center">Id</th>
        	            		<th class=" text-center">Estado</th>
        	                	<th colspan="3">
        	                		<a href="formAgregarEstado.php" class="btn btn-secondary">Agregar</a>
        	            		</th>
        	            	</tr>
                        </thead>
                        <tbody>
<?php
    while($estado = mysqli_fetch_assoc($estados)){
?>
                            <tr>
                                <td class=" text-center"><?= $estado['idEstado'] ?></td>
                                <td class=" text-center"><?= $estado['valorEstado'] ?></td>
                                <td>
	    		            		<a href="formModificarEstado.php?idEstado=<?= $estado['idEstado'] ?>" class="btn btn-outline-secondary">Modificar</a>
                                </td>
	    		            	<td>
	    		            		<a href="formEliminarEstado.php?idEstado=<?= $estado['idEstado'] ?>" class="btn btn-outline-secondary">Eliminar</a>
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