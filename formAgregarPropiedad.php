<?php
    require 'funciones/conexion.php';
    require 'funciones/Estado.php';
    require 'funciones/Tipo.php';
    require 'funciones/Barrio.php';
    include 'html/header.html';
    $estados = listarEstados();
    $tipos = listarTipos();
    $barrios = listarBarrios();
?>
<body>
    <main class="formAgregar Propiedad">
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
            <h2 class="d-block text-center my-5">Agregar propiedad</h2>
            <form action="agregarPropiedad.php" method="POST">
                <label>Estado: </label>
                <select name="idEstado" class="form-control" required>
                    <option value="">Seleccione un estado</option>

                    <?php 
                        while ($estado = mysqli_fetch_assoc($estados)) {
                     ?>            
                        <option value="<?= $estado['idEstado']; ?>"> <?= $estado['valorEstado']; ?></option>
                    <?php 
                     }
                    ?>
                </select>
         
                <label>Tipo: </label>
                <select name="idTipo" class="form-control" required>
                    <option value="">Seleccione un tipo</option>

                    <?php 
                        while ($tipo = mysqli_fetch_assoc($tipos)) {
                     ?>            
                        <option value="<?= $tipo['idTipo']; ?>"> <?= $tipo['valorTipo']; ?></option>
                    <?php 
                     }
                    ?>
                </select>
                
                <label>Barrio: </label>
                <select name="idBarrio" class="form-control" required>
                    <option value="">Seleccione un barrio</option>

                    <?php 
                        while ($barrio = mysqli_fetch_assoc($barrios)) {
                     ?>            
                        <option value="<?= $barrio['idBarrio']; ?>"> <?= $barrio['valorBarrio']; ?></option>
                    <?php 
                     }
                    ?>
                </select>
                              
                <label>Ambientes: </label>
                <input type="number" name="ambientes" class="form-control" required>
                <label>Título: </label>
                <input type="text" name="proTitulo" class="form-control">
                <label>Dirección: </label>
                <input type="text" name="proDireccion" class="form-control">
                <label>Precio: </label>
                <input type="number" name="proPrecio" class="form-control">
                <label>Descripción: </label>
                <textarea name="proDescripcion" class="form-control"></textarea>
                <label>Dormitorios: </label>
                <input type="number" name="proDormitorios" class="form-control">
                <label>Baños: </label>
                <input type="number" name="proBaños" class="form-control">
                <label>Superficie Total: </label>
                <input type="number" name="proSupTotal" class="form-control">
                <label>Superficie Cubierta: </label>
                <input type="number" name="proSupCubierta" class="form-control">
                <label>Superficie Semicubierta: </label>
                <input type="number" name="proSupSemi" class="form-control">
                <label>Antiguedad: </label>
                <input type="number" name="proAntiguedad" class="form-control">
                <label>Cocheras: </label>
                <input type="number" name="proCocheras" class="form-control">

                <br>
                <h2>Adicionales</h2>
                <label>Pileta: </label>
                <input type="checkbox" name="proPileta" value="1">
                <br>
                <label>Parrilla: </label>
                <input type="checkbox" name="proParrilla" value="1">
                <br>
                <label>Quincho: </label>
                <input type="checkbox" name="proQuincho" value="1">
                <br>
                <label>Jardin: </label>
                <input type="checkbox" name="proJardin" value="1">
                <br>

                <br>
                <h2>Servicios</h2>
                <label>Luz electrica: </label>
                <input type="checkbox" name="proLuzElec" value="1">
                <br>
                <label>Agua corriente: </label>
                <input type="checkbox" name="proAguaCorriente" value="1">
                <br>
                <label>Agua de pozo: </label>
                <input type="checkbox" name="proAguaPozo" value="1">
                <br>
                <label>Gas natural: </label>
                <input type="checkbox" name="proGasNatural" value="1">
                <br>
                <label>Gas embasado: </label>
                <input type="checkbox" name="proGasEmbasado" value="1">
                <br>
                <label>Cloacas: </label>
                <input type="checkbox" name="proCloacas" value="1">
                <br>

                <button class="btn btn-dark">Agregar</button>
                <a href="adminPropiedades.php" class="btn btn-outline-secondary m-2">Volver a panel de administración</a>
            </form>
        </div>
    </main>
<?php
//	include 'html/footer.html';
?>