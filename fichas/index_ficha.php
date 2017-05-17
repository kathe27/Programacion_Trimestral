<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
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
		    <ul class="nav navbar-nav ">
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

	<div class="container-fluid mov">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 box">
				<h1 class="text-center">Fichas de Caracterización</h1>
				<hr>
				<div class="panel-default">
					<h3 class="panel-title-success text-center">Registros</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							
							<a href="anadir_ficha.php" class="btn btn-success">Añadir <i class="glyphicon glyphicon-plus"></i></a><br><br>
							<table border="1px" class=" table table-hover">
								<tr>
									<td><strong>Nombre</strong></td>
									<td><strong>Acciones</strong></td>
								</tr>
								<script src="js/jquery-3.1.1.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script>
									$(document).ready(function(){
    									$('[data-toggle="tooltip"]').tooltip(); 
									});
								</script>
								<?php 
									$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
									$insertar = mysqli_query($conexion, "SELECT *FROM fichas");
									while ($row = mysqli_fetch_array($insertar)) {
										echo "
											<tr>
												<td>".$row['especializacion']."</td>
												<td>
													<a class='btn btn-info glyphicon glyphicon-search' data-toggle='tooltip' title='Consultar' href='consultar_ficha.php?id=".$row['id']."'></a>
													<a class='btn btn-success glyphicon glyphicon-pencil' data-toggle='tooltip' title='Modificar' href='editar_ficha.php?id=".$row['id']."'></a>
													<a class ='btn btn-danger glyphicon glyphicon-trash' data-toggle='tooltip' title='Eliminar' href='eliminar_ficha.php?id=".$row['id']."'></a>
												</td>
											</tr>";
									}
								 ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>