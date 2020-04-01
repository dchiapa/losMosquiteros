<?php
    require 'funciones/conexion.php';
    require 'funciones/tipo.php';
    include 'html/header.html';
    $tipos = listarTipos();
?>
<body>
    <main id="adminTipos">
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
            <h2 class="d-block text-center my-5">Panel de administración de tipos</h2>
            <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
            <table class="table table-hover table-border table-striped">
                <thead class="thead-dark">
    	        	<tr>
                        <th class=" text-center">Id</th>
    	        		<th class=" text-center">Tipo</th>
    	            	<th colspan="3">
    	            		<a href="formAgregarTipo.php" class="btn btn-secondary">Agregar</a>
    	        		</th>
    	        	</tr>
                </thead>
                <tbody>
<?php
    while($tipo = mysqli_fetch_assoc($tipos)){
?>
                    <tr>
                        <td class=" text-center"><?= $tipo['idTipo'] ?></td>
                        <td class=" text-center"><?= $tipo['valorTipo'] ?></td>
                        <td>
	    		    		<a href="formModificarTipo.php?idTipo=<?= $tipo['idTipo'] ?>" class="btn btn-outline-secondary">Modificar</a>
                        </td>
	    		    	<td>
	    		    		<a href="formEliminarTipo.php?idTipo=<?= $tipo['idTipo'] ?>" class="btn btn-outline-secondary">Eliminar</a>
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
<?php
	include 'html/footer.html';
?>