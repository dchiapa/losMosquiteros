<?php
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    include 'html/header.html';
    $usuarios = listarUsuarios();
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
        <div class="col-12 mx-auto">
            <h2 class="d-block text-center my-5">Panel de administración de Usuarios</h2>
            <div class="row mx-auto">
                <div class="col-10 mx-auto">
                    <a href="admin.php" class="btn btn-outline-secondary m-2">Volver a principal</a>
                    <table class="table table-hover table-border table-striped">
                        <thead class="thead-dark">
        	            	<tr>
                                <th class=" text-center">Id</th>
                                <th class=" text-center">Nombre</th>
                                <th class=" text-center">Apellido</th>
                                <th class=" text-center">Email</th>
                                <th class=" text-center">Contraseña</th>
                                <th class=" text-center">Estado</th>
        	                	<th colspan="3">
        	                		<a href="formAgregarUsuario.php" class="btn btn-secondary">Agregar</a>
        	            		</th>
        	            	</tr>
                        </thead>
                        <tbody>
<?php
    while($usuario = mysqli_fetch_assoc($usuarios)){
?>
                            <tr>
                                <td class=" text-center"><?= $usuario['idUsuario'] ?></td>
                                <td class=" text-center"><?= $usuario['usuNombre'] ?></td>
                                <td class=" text-center"><?= $usuario['usuApellido'] ?></td>
                                <td class=" text-center"><?= $usuario['usuEmail'] ?></td>
                                <td class=" text-center"><?= $usuario['usuPass'] ?></td>
                                <td class=" text-center"><?= $usuario['usuEstado'] ?></td>
                                <td>
	    	        	    		<a href="formModificarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">Modificar</a>
                                </td>
	    	        	    	<td>
	    	        	    		<a href="formEliminarUsuario.php?idUsuario=<?= $usuario['idUsuario'] ?>" class="btn btn-outline-secondary">Eliminar</a>
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