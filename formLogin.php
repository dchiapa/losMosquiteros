<?php
    require 'config/config.php';
	require 'funciones/conexion.php';
	include 'includes/header.html';
	
?>
<body>
	<main id="ppal">
		<header class="card-header border-0">
			<img src="img/logo2.jpeg" alt="Logo de Los mosquiteros">
			<h1 class="d-none">Los Mosquiteros</h1>
			<nav>
			    <ul>
			        <li class="d-inline"><a href="index.php" class="btn btn-outline-light py-2 px-5">Inicio</a></li>
			        <li class="d-inline"><a href="" class="btn btn-outline-light py-2 px-5">Publicar</a></li>
			       
			    </ul>
			</nav>
		</header>
    <form action="login.php" method="POST">
      <div class=" card form-group mx-auto">
        <h2 class="text-center">Saludo</h2>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="contenedorLogo"><img src="img/logoEmail.png" alt="" class="logoPass"></div>
          </div>
          <input type="text" name= "usuEmail"class="form-control" id="inlineFormInputGroup" >
        </div>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="contenedorLogo"><img src="img/logoPass.png" alt="" class="logoPass"></div>
          </div>
          <input type="password" name="usuPass"class="form-control" id="inlineFormInputGroup" >
        </div>
        <button type="submit" class="btn btn-primary">login</button>
      </div>
    </form>
<?php
    if (isset($_GET['error'])){
?>
<script>
        Swal.fire(
  'Usuario y/o contraseña incorrectos!',
  'Se encuentra registrado?',
  'error'
)
</script>
<?php
    }
    if (isset($_GET['errorAut'])){
?>
<script>
        Swal.fire(
  'Usted no posee permiso para ingresar!',
  'Se encuentra registrado?',
  'error'
)
</script>
<?php
    }
?>
  </main>
<?php
	include 'includes/footer.html';
?>