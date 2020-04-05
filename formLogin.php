<?php
	require 'funciones/conexion.php';
	include 'html/header.html';
	
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
			        <li class="d-inline"><a href="admin.php" class="btn btn-outline-light py-2 px-5">LogIn</a></li>
			    </ul>
			</nav>
		</header>
        <form>
  
  <div class="form-group">
      <h2 class="">Saludo</h2>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="contenedorLogo"><img src="img/logoEmail.png" alt="" class="logoPass"></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="">
      </div>
   
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="contenedorLogo"><img src="img/logoPass.png" alt="" class="logoPass"></div>
        </div>
        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="">
      </div>
    
    <button type="submit" class="btn btn-primary">login</button>
    
</form>


	</main>
<?php
	include 'html/footer.html';
?>