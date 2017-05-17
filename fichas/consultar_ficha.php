<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php 
	if ($_GET) {
	 	$id = $_GET['id'];
	 	$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
	 	$insertar = mysqli_query($conexion, "SELECT * FROM fichas WHERE id=$id");
	 	$row = mysqli_fetch_array($insertar); 
	 } 
	 ?>
	 <nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><img  src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="../ambientes/ambientes.php">Ambientes</a></li>
		      <li><a href="#">Fichas</a></li>
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
		<br>
	<div class="container-fluid mov">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 box">
				<h1 class="text-center">Fichas de Caracterización</h1>
				<hr>
				<div class="panel-default">
					<a href="index_ficha.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
					<div class="panel-heading">
						<h3 class="panel-title-success text-center">Consulta Fichas de Caracterización</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<table class="table table-hover" border="1px">
									<tr>
										<td><strong>Ficha</strong></td>
										<td><?php echo $row['ficha'] ?></td>
									</tr>
									<tr>
										<td><strong>Especializacion</strong></td>
										<td><?php echo $row['especializacion'] ?></td>
									</tr>
									<tr>
										<td><strong>Instructor</strong></td>
										<td><?php echo $row['instructor'] ?></td>
									</tr>
									<tr>
										<td><strong>Fecha de Inicio</strong></td>
										<td><?php echo $row['fecha_inicio'] ?></td>
									</tr>
									<tr>
										<td><strong>Fecha Lectiva</strong></td>
										<td><?php echo $row['fecha_lectiva'] ?></td>
									</tr>
									<tr>
										<td><strong>Fecha Final</strong></td>
										<td><?php echo $row['fecha_final']?></td>
									</tr>
									<tr>
										<td><strong>Horario</strong></td>
										<td><?php echo $row['horario'] ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>