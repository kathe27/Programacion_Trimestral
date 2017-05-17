<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ambientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>

		<nav class="navbar navbar-inverse ">
		  <div class="container-fluid">
		    <div class="navbar-header">
		       <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="#">Ambientes</a></li>
		      <li><a href="../fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="../instructores/gestionarIns.php">Instructores</a></li>
		    </ul>
		    <form class="navbar-form navbar-right">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Buscar">
		      </div>
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-zoom-in"></i></button>
		    </form>
		  </div>
		</nav>
	<div class="container-fluid">
	
		<h1 class="text-center" >Lista de  Ambientes</h1><br>
	</div>
	<hr>
		<br>

<div class="col-md-8 col-md-offset-2" >
	<a  class="btn btn-success " href="anadir_ambiente.php">Añadir Ambiente
		<i  class="glyphicon glyphicon glyphicon-plus" ></i>
	</a><br><br>


	<table class="text-center table table-hover">

		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Acciones</strong></td>


		</tr>
		 <script src="js/jquery-3.1.1.js"></script>
		 <script src="js/bootstrap.js"></script>
	     <script src="js/bootstrap.min.js"></script>

	     

	<?php 

		$con = mysqli_connect('localhost','root','','programacion_trimestral');

		$sql = mysqli_query($con, "SELECT * FROM ambientes");

		while($row = mysqli_fetch_array($sql)){
			echo "<tr>
					<td>".$row['nombre']."</td>
					<td>
						<a class='btn btn-info' href='consultar_ambiente.php?id=".$row['id']."'>
							<i data-toggle='tooltip' data-placement='top' title='Consultar'  class='glyphicon glyphicon-search' ></i>
						</a>
						
						<a class='btn btn-success' href='modificar_ambiente.php?id=".$row['id']."'>
							<i data-toggle='tooltip' data-placement='top' title='Modificar' class='glyphicon glyphicon-pencil' ></i>
						</a>
						<a class='btn btn-danger' href='eliminar_ambiente.php?id=".$row['id']."'>
							<i data-toggle='tooltip' data-placement='top' title='Eliminar' class='glyphicon glyphicon-trash' ></i>
						</a>
						
					</td>
				</tr>";

		}
	 ?>
	</table>
</div>

	<script>
	     	$(document).ready(function(){
    			$('[data-toggle="tooltip"]').tooltip(); 
			});
	   </script>
	
</body>
</html>