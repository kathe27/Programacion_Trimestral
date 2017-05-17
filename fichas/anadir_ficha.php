<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fichas de Caracterizacion</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
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
						<h3 class="panel-title-success text-center">Formulario Fichas de Caracterización</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form action="" method="POST">
									<div class="form-group">
									<label for="" class="label label-success">Ficha</label>
										<input type="number" 
											 class="form-control" 
											 name="ficha" 
											 placeholder="Ingrese su ficha*">
									</div>		 
									<div class="form-group">
									<label for="" class="label label-success">Especializacion</label>
										<input type="text" 
											class="form-control" 
											name="especializacion" 
											placeholder="Especializacion*">
									</div>
									<div class="form-group">
										<label for="" class="label label-success">Instructor</label>
										<input type="text" 
											class="form-control" 
											name="instructor" 
											placeholder="Instructor*">
									</div>
									<div class="form-group">
										<label for="" class="label label-success">Fecha de Inicio</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_inicio">
									</div>
									<div class="form-group">
										<label for="" class="label label-success">Fecha Lectiva</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_lectiva">
									</div>
									<div class="form-group">
										<label for="" class="label label-success">Fecha Final</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_final">
									</div>
									<div class="form-group">
										<label for="" class="label label-success">Horario</label>
										<input type="time" 
											class="form-control" 
											name="horario">
									</div>
									<button class="btn btn-success">Enviar 
										<i class="glyphicon glyphicon-plus-sign"></i>
									</button>
									<button class="btn btn-danger">Borrar 
										<i class="glyphicon glyphicon-remove-circle">
										</i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Codigo PHP para Añadir -->
	<?php 
		if ($_POST) {
			$ficha = $_POST['ficha'];
			$especializacion = $_POST['especializacion'];
			$instructor = $_POST['instructor'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$fecha_lectiva = $_POST['fecha_lectiva'];
			$fecha_final = $_POST['fecha_final'];
			$horario = $_POST['horario'];



			$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
			$insertar = "INSERT INTO fichas VALUES('', '$ficha', '$especializacion', '$instructor', '$fecha_inicio', '$fecha_lectiva', '$fecha_final', '$horario')";
			$row = mysqli_query($conexion,$insertar);
			if ($row) {
				echo "
				<script>
				alert('se añadio correctamente');
				window.location.replace(index.php);
				</script>";
			} else{
				echo "
				<script>
				alert('Ocurrio un error');
				</script>";
			}
		}
	 ?>
</body>
</html>