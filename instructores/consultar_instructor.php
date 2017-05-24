<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instructores</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
</head>

<body>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		       <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="../ambientes/ambientes.php">Ambientes</a></li>
		      <li><a href="../fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="#">Instructores</a></li>
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
			<h1 class="display-1 text-center"> Instructores</h1>
		</div>
		<hr>

		
	 <div class="col-md-8 col-md-offset-2 box ">
	 <a class=" glyphicon glyphicon-arrow-left btn btn-danger" href="gestionarIns.php">Volver</a><br><br>
		<table  class="text-center table table-hover box">
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Especialidad</th>
				<th>Vinculacion</th>
				<th>Tipo Planta</th>
				<th>Tipo Contrato</th>
				<th>Cantidad Horas</th>
				<th>Actividades Administrativas</th>
				<th>Area</th>






			</tr>
		</div>

		<?php  

			$id=$_GET['id'];
			$con=mysqli_connect('localhost','root','','programacion_trimestral');
			$sql=mysqli_query($con,"SELECT * FROM instructores WHERE id=$id");

		while ($row = mysqli_fetch_array($sql)) {
					echo '<tr>
							<td>'.$row["nombres"].'</td>
							<td>'.$row["apellidos"].'</td>
							<td>'.$row["especialidad"].'</td>

							<td>'.$row["vinculacion1"].'</td>

							<td>'.$row["tipoplanta"].'</td>
							<td>'.$row["tipocontrato"].'</td>
							<td>'.$row["cantidadhoras"].'</td>
							<td>'.$row["actadministrativas"].'</td>
							<td>'.$row["area"].'</td>




						 </tr>';
				}	
		 ?>
	 </table>

	
</body>
</html>

