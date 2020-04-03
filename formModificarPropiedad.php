<?php
    require 'funciones/conexion.php';
    require 'funciones/estado.php';
    require 'funciones/tipo.php';
    require 'funciones/barrio.php';
    require 'funciones/propiedad.php';
    include 'html/header.html';
    $estados = listarEstados();
    $tipos = listarTipos();
    $barrios = listarBarrios();
    $propiedad = verPropiedadPorID();
?>
<body>
    <main class="formModificar Usuario">
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
            <h2 class="d-block text-center my-5">Modificar propiedad</h2>
            <form action="modificarPropiedad.php" method="POST">
            <input type="hidden" name="idPropiedad" value="<?= $propiedad['idPropiedad']; ?>" >    
           
                <label>Estado: </label>
                <select name="idEstado" class="form-control" required>
                    <option value="<?= $propiedad['idEstado'] ?>"><?= $propiedad['valorEstado']; ?></option>
<?php
            while ( $estado = mysqli_fetch_assoc($estados) ){
?>
                    <option value="<?= $esstado['idTipo']; ?>"><?= $estado['valorEstado']; ?></option>
<?php
            }
?>
                </select>

                <label>Tipo: </label>
                <select name="idTipo" class="form-control" required>
                    <option value="<?= $propiedad['idTipo'] ?>"><?= $propiedad['valorTipo']; ?></option>
<?php
            while ( $tipo = mysqli_fetch_assoc($tipos) ){
?>
                    <option value="<?= $tipo['idTipo']; ?>"><?= $tipo['valorTipo']; ?></option>
<?php
            }
?>
                </select>
                
                <label>Barrio: </label>
                <select name="idBarrio" class="form-control" required>
                    <option value="<?= $propiedad['idBarrio'] ?>"><?= $propiedad['valorBarrio']; ?></option>
<?php
            while ( $barrio = mysqli_fetch_assoc($barrios) ){
?>
                    <option value="<?= $barrio['idBarrio']; ?>"><?= $barrio['valorBarrio'];?></option>
<?php
            }
?>
                </select>
                
                <label>Ambientes: </label>
                <input type="number" name="ambientes" value="<?=$propiedad['ambientes']; ?>"class="form-control" required>
                <label>Título: </label>
                <input type="text" name="proTitulo" value="<?=$propiedad['proTitulo']; ?>" class="form-control" required>
                <label>Dirección: </label>
                <input type="text" name="proDireccion" value="<?=$propiedad['proDireccion']; ?>" class="form-control" required>
                <label>Precio: </label>
                <input type="number" name="proPrecio" value="<?=$propiedad['proPrecio']; ?>" class="form-control" required>
                <label>Descripción: </label>
                <textarea name="proDescripcion" class="form-control" required><?=$propiedad['proDescripcion']; ?>"</textarea>
                <label>Dormitorios: </label>
                <input type="number" name="proDormitorios" value="<?=$propiedad['proDormitorios']; ?>" class="form-control" required>
                <label>Baños: </label>
                <input type="number" name="proBaños" value="<?=$propiedad['proBaños']; ?>"  class="form-control" required>
                <label>Superficie Total: </label>
                <input type="number" name="proSupTotal" value="<?=$propiedad['proSupTotal']; ?>"  class="form-control" value="0">
                <label>Superficie Cubierta: </label>
                <input type="number" name="proSupCubierta" value="<?=$propiedad['proSupCubierta']; ?>"  class="form-control" value="0">
                <label>Superficie Semicubierta: </label>
                <input type="number" name="proSupSemi" value="<?=$propiedad['proSupSemi']; ?>"  class="form-control" value="0">
                <label>Antiguedad: </label>
                <input type="number" name="proAntiguedad" value="<?=$propiedad['proAntiguedad']; ?>"  class="form-control" value="0">
                <label>Cocheras: </label>
                <input type="number" name="proCocheras" value="<?=$propiedad['proCocheras']; ?>"  class="form-control" value="0">

                <br>
                <h2>Adicionales</h2>

                <label>Pileta: </label>
                <?php
                    if($propiedad['proPileta'] == 1){
                ?> 
                    <input type="checkbox" name="proPileta" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proPileta" value="1">
                <?php              
                      } 
                ?>
                <br>
                <label>Parrilla: </label>
                <?php
                    if($propiedad['proParrilla'] == 1){
                ?> 
                    <input type="checkbox" name="proParrilla" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proParrilla" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Quincho: </label>
                <?php
                    if($propiedad['proQuincho'] == 1){
                ?> 
                    <input type="checkbox" name="proQuincho" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proQuincho" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Jardin: </label>
                <?php
                    if($propiedad['proJardin'] == 1){
                ?> 
                    <input type="checkbox" name="proJardin" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proJardin" value="1" >
                <?php              
                      } 
                ?>
                                                        
                <br>
                <h2>Servicios</h2>
                
                <br>
                <label>Luz electrica: </label>
                <?php
                    if($propiedad['proLuzEle'] == 1){
                ?> 
                    <input type="checkbox" name="proLuzEle" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proLuzEle" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Agua corriente: </label>
                <?php
                    if($propiedad['proAguaCorriente'] == 1){
                ?> 
                    <input type="checkbox" name="proAguaCorriente" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proAguaCorriente" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Agua de pozo: </label>
                <?php
                    if($propiedad['proAguaPozo'] == 1){
                ?> 
                    <input type="checkbox" name="proAguaPozo" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proAguaPozo" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Gas natural: </label>
                <?php
                    if($propiedad['proGasNatural'] == 1){
                ?>         
                    <input type="checkbox" name="proGasNatural" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proGasNatural" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Gas embasado: </label>
                <?php
                    if($propiedad['proGasEmbasado'] == 1){
                ?>         
                    <input type="checkbox" name="proGasEmbasado" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proGasEmbasado" value="1" >
                <?php              
                      } 
                ?>
                <br>
                <label>Cloacas: </label>
                <?php
                    if($propiedad['proCloacas'] == 1){
                ?>         
                    <input type="checkbox" name="proCloacas" value="1" checked>
                <?php              
                    } else {
                ?> 
                    <input type="checkbox" name="proCloacas" value="1" >
                <?php              
                      } 
                ?>

                <br>                     
                <button class="btn btn-dark">Modificar</button>
                <a href="adminPropiedades.php" class="btn btn-outline-secondary m-2">Volver a propiedades</a>
            </form>
        </div>
    </main>
<?php
	include 'html/footer.html';
?>

