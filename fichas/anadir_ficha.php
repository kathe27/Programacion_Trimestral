<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fichas de Caracterizacion</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="../instructores/imgs/logoSena.png">
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
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
		    </form>
		  </div>
		</nav>
		<br>
	<div class="container-fluid mov">
		<div class="row">
		<h1 class="text-center">Añadir Fichas de Caracterización</h1>
		<hr>
			<div class="col-md-8 col-md-offset-2 box">
			<br>
				<div class="panel-default">
					<a href="index_ficha.php" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i>Volver</a>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form action="" method="POST" id="registro">
									<div class="form-group">
									<label>Ficha*</label>
										<input type="number" 
											 class="form-control" 
											 name="ficha" 
											 placeholder="Ingrese numero ficha" data-validation="number required">
									</div>	
									<div class="form-group">
										<label>Nombre Ficha*</label>
										<input type="text"
											   class="form-control"
											   name="nombre"
											   placeholder="Nombre Ficha"
											   data-validation="required">
									</div>		  
									<div class="form-group">
									<label>Especialidad*</label>
										<select data-validation="required" name="especialidad" class="form-control">
											<option>Seleccione una opcion...</option>
											<option value="Eectricidad">Electricidad</option>
											<option value="Informatica">Informatica</option>
											<option value="Salud Ocupacional">Salud Ocupacional</option>
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
											placeholder="Instructor"
											data-validation="required">
									</div>
									<div class="form-group">
										<label>Fecha de Inicio*</label><br>
										<input type="date" 
											class="form-control" 
											name="fecha_inicio"
											data-validation="date">
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
											name="fecha_final"
											data-validation="date">
									</div>
									<div class="form-group">
										<label>Tipo de Horario*</label>
										<select data-validation="required" name="horario" id="" class="form-control">
											<option value="">Seleccione...</option>
											<option value="Diurna">Diurna</option>
											<option value="Mixta">Mixta</option>
											<option value="Nocturna">Nocturna</option>
											<option value="Nocturna-Dual">Nocturna-Dual</option>
											<option value="Dual">Dual</option>
											<option value="Virtual">Virtual</option>
										</select>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.form-validator.min.js"></script>
	<script src="js/jquery.form-validator.es.js"></script>

	<script>
        $(document).ready(function() {
                $.validate({ 
                    form: '#registro', 
                    language: es 
                });
            });
	</script>
	<!-- Codigo PHP para Añadir -->
	<?php 
		if ($_POST) {
			$ficha = $_POST['ficha'];
			$nombre = $_POST['nombre'];
			$especialidad = $_POST['especialidad'];
			$instructor = $_POST['instructor'];
			$fecha_inicio = $_POST['fecha_inicio'];
			$fecha_lectiva = $_POST['fecha_lectiva'];
			$fecha_final = $_POST['fecha_final'];
			$horario = $_POST['horario'];



			$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
			$insertar = "INSERT INTO fichas VALUES('', '$ficha', '$nombre', '$especialidad', '$instructor', '$fecha_inicio', '$fecha_lectiva', '$fecha_final', '$horario')";
			$row = mysqli_query($conexion,$insertar);
			if ($row) {

				echo "
				<script>window.location.replace('index_ficha.php?val=a')</script>";

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