<?php
	require 'funciones/conexion.php';
	require 'funciones/tipo.php';
    require 'funciones/estado.php';
    require 'funciones/propiedad.php';
    require 'funciones/imagen.php';
	include 'includes/header.html';
	$tipos = listarTipos();
    $estados = listarEstados();
    $propiedad = verPropiedadPorID();
    $imagenes = listarImagenesPropiedad();
?>
<body>
	<main id="propiedad">
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
        
        <h2 class="d-block text-center my-5">Agregar Imagenes</h2>
        <form action="agregarImagenes.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idPropiedad" value="<?= $propiedad['idPropiedad']; ?>">
            <label>Imagenes: </label>
            <input type="file" name="prdImagen[]" multiple class="form-control">
            <button class="btn btn-dark">Agregar</button>
            <a href="adminPropiedades.php" class="btn btn-outline-secondary m-2">Volver a panel de administración</a>
        </form>
        </div>

    
<div class="row">

<?php 
	while ($imagen= mysqli_fetch_assoc($imagenes)) {
?>

     <div class="card col-4">
     	<img src="img/<?= $imagen['imgNombre']; ?>" class="card-img-top">

     </div>

<?php 
}
      ?>
</div>

    </main>

	</main>
<?php
	include 'includes/footer.html';
?>