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
		<h1 class="text-center">Añadir Fichas de Caracterización</h1>
		<hr>
			<div class="col-md-6 col-md-offset-3 box">
			<br>
				<div class="panel-default">
					<a href="index_ficha.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form action="" method="POST">
									<div class="form-group">
									<label>Ficha*</label>
										<input type="number" 
											 class="form-control" 
											 name="ficha" 
<<<<<<< HEAD
											 placeholder="Ingrese numero ficha">
									</div>	
									<div class="form-group">
										<label>Nombre Ficha*</label>
=======
											 placeholder="Ingrese su ficha">
									</div>		 
									<div class="form-group">
									<label>Especializacion*</label>
>>>>>>> 48e303bfa96ac598511eaf8381e057f9538224b7
										<input type="text" 
											class="form-control" 
											name="nombre" 
											placeholder="Nombre Ficha">
									</div>	 
									<div class="form-group">
									<label>Especialidad*</label>
										<select name="especialidad" class="form-control">
											<option>Seleccione una opcion...</option>
											<option value="Eectricidad">Electricidad</option>
											<option value="Informatica">Informatica</option>
											<option value="Salud Ocupacionak">Salud Ocupacional</option>
											<option value="Mecanica">Mecanica</option>
											<option value="Automotriz">Automotriz</option>
											<option value="Construccion">Construccion</option>
											<option value="Confeccion">Confeccion</option>
											<option value="Ambiental">Ambiental</option>
										</select>
									</div>
									<div class="form-group">
										<label>Instructor*</label>
										<input type="text" 
											class="form-control" 
											name="instructor" 
											placeholder="Instructor">
									</div>
									<div class="form-group">
										<label>Fecha de Inicio*</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_inicio">
									</div>
									<div class="form-group">
										<label>Fin Lectiva*</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_lectiva">
									</div>
									<div class="form-group">
										<label>Fecha Final*</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_final">
									</div>
									<div class="form-group">
										<label>Horario*</label>
										<input type="text" 
											class="form-control" 
											name="horario"
											placeholder="Horario">
									</div>
									<button class="btn btn-success">Añadir 
										<i class="glyphicon glyphicon-plus"></i>
									</button>
									<button class="btn btn-default">Borrar 
										<i class="glyphicon glyphicon-trash">
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
			$nombre = $_POST['nombre'];
			$especialidad = $_POST['especialidad'];
			$instructor = $_POST['instructor'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$fecha_lectiva = $_POST['fecha_lectiva'];
			$fecha_final = $_POST['fecha_final'];
			$horario = $_POST['horario'];



			$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
			$insertar = "INSERT INTO fichas VALUES('', '$ficha', '$nombre', '$especialidad', '$instructor', '$fecha_inicio', '$fecha_lectiva', '$fecha_final', '$horario')";
			$row = mysqli_query($conexion,$insertar);
			if ($row) {
				echo "
				<script>
				alert('Se añadio correctamente');
				window.location.replace('index_ficha.php');
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