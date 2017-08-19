<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar Ambiente</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="../instructores/imgs/logoSena.png">
</head>

<body>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		       <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="ambientes.php">Ambientes</a></li>
		      <li><a href="../fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="../instructores/gestionarIns.php">Instructores</a></li>
		    </ul>
		    <form class="navbar-form navbar-right">
		      <div class="form-group">
		        <input type="text" class="form-control" placeholder="Buscar">
		      </div>
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
		    </form>
		  </div>
		</nav>
		
		<div class="container-fluid">
			<h1 class="display-1 text-center">Consultar Ambiente</h1>
		</div>
		<hr>

		
	 <div class="col-md-6 col-md-offset-3 box ">
	 <a class=" glyphicon glyphicon-arrow-left btn btn-danger" href="ambientes.php">Volver</a><br><br>
		<table  class="text-center table table-hover">
			<tr>
				<td><strong>Ambiente</strong></td>
				<td><strong>Cupo</strong></td>
				<td><strong>Centro</strong></td>

<!-- 				<td><strong>Disponibilidad</strong></td> -->
			</tr>
		</div>

		<?php  

			$id=$_GET['id'];
			$con=mysqli_connect('localhost','root','','programacion_trimestral');
			$sql=mysqli_query($con,"SELECT * FROM ambientes WHERE id=$id");

		while ($row = mysqli_fetch_array($sql)) {
					echo '<tr>
							<td>'.$row["nombre"].'</td>
							<td>'.$row["cupo"].'</td>
							<td>'.$row["centro"].'</td>
						 </tr>';
				}	
		 ?>
	 </table>

	
</body>
</html>

