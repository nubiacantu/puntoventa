<?php
if (isset($_GET['id'])) { // Verifica si se recibió un parámetro "id" a través del método GET
  $id = $_GET['id'];
  $_SESSION['id_tienda'] = $id; // Asignar el ID a una variable de sesión
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <?php
    include('head.php');
  ?>
  <style type="text/css"></style>
</head>
<body >
  <?php
    include('aside.php');
  ?>
  <div style="margin-left: 8%;margin-top: 3%">
  	<h1>DASHBOARD</h1>
  	<div class="center">
  		<div class="linea"></div>
  	</div>
  	<div class="col-12" style="margin-top: 3%">
  		<div class="col-10 mx-auto">
	  		<div class="row">
	  			<div class="col-4 mx-auto text-center">
	  				<div class="card" style="width: 100%;height: 45%">
					  <div class="card-body">
					    <h1 style="font-size: 100px">0</h1>
					    <h2 style="font-size: 34px">Total de Productos</h2>
					  </div>
					</div>

					<div class="card" style="width: 100%;height: 47%">
					  <div class="card-body">
					    <h1 style="font-size: 100px">0</h1>
					    <h2 style="font-size: 34px">Total de Categorías</h2>
					  </div>
					</div>
	  			</div>
	  			<div class="col-4 text-center">
	  				<div class="card" style="width: 100%;height: 45%">
					  <div class="card-body">
					    <h1 style="font-size: 100px">0</h1>
					    <h2 style="font-size: 34px">Total de Usuarios</h2>
					  </div>
					</div>

					<div class="card" style="width: 100%;height: 47%">
					  <div class="card-body">
					    <h1 style="font-size: 100px">0</h1>
					    <h2 style="font-size: 34px">Total de Cambios Realizados</h2>
					  </div>
					</div>
	  			</div>
	  			<div class="col-4 text-center center">
	  				<div class="card" style="width: 100%;">
					  <div class="card-body">
					    <a href="usuarios.php" class="btn btn-primary btn-nav">Usuarios</a>
					    <br>
					    <a href="#" class="btn btn-primary btn-nav">Productos</a>
					    <br>
					    <a href="categorias.php" class="btn btn-primary btn-nav">Categorías</a>
					    <br>
					    <a href="#" class="btn btn-primary btn-nav">Realizar Venta</a>
					    <br>
					    <a href="#" class="btn btn-primary btn-nav">Historial de venta</a>
					    <br>
					    <div id="carouselExampleAutoplaying" class="carousel custom-carousel slide  mx-auto" data-bs-ride="carousel" style="width: 90%">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/1.png" class="d-block w-100 custom-image" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/2.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/3.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/4.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="img/5.png" class="d-block w-100" alt="...">
						    </div>
						  </div>
						</div>
					  </div>
					</div>
	  			</div>

	  		</div>
	  	</div>
  	</div>
  	
  	

  </div>
  

  <?php
    include('foot.php');
  ?>
</body>
</html>
