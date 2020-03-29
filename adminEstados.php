<?php
    require 'funciones/conexion.php';
    require 'funciones/estado.php';
    $estados = listarEstados();
	include 'html/header.html';
?>
<main class="container col-6">
    <h2>Panel de administración de estados</h2>
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
</main>
<?php
	include 'html/footer.html';
?>