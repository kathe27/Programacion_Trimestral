<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
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
		    <ul class="nav navbar-nav ">
		      <li><a href="../index.php">Inicio</a></li>
		      <li><a href="../ambientes/ambientes.php">Ambientes</a></li>
		      <li><a href="#">Fichas</a></li>
		      <li><a href="../instructores/gestionarIns.php">Instructores</a></li>
		    </ul>
		    <form method="POST" class="navbar-form navbar-right">
		      <div class="form-group">
		        <input type="text" name="navb" class="form-control" placeholder="Buscar">

		      </div>
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-zoom-in"></i></button>
		    </form>
		  </div>
		</nav>


	<?php
		if ($_POST) {
			$nav=$_POST['navb'] ;
		}
	 ?>
	
	<div class="container-fluid mov">
		<div class="row">
		<br>
		<h1 class="text-center">Lista Fichas de Caracterización</h1>
		<br>
			<hr>
			<div class="col-md-6 col-md-offset-3">
			<?php 
				if ($_GET) {
				 	
					$valor=$_GET['val'];

					if ($valor=='a') {
						echo "<div class='panel-body'>
						<div class='row'>
							<div class='alert alert-success alert-dismissable'>
	  						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	  						La <strong>ficha</strong> fue adicionada con exito!
						</div>";
				 } 

				 	

					if ($valor=='e') {
						echo "<div class='panel-body'>
						<div class='row'>
							<div class='alert alert-success alert-dismissable'>
	  						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	  						La <strong>ficha</strong> se eliminó con exito!
						</div>";
				 }

				 if ($valor=='ed') {
						echo "<div class='panel-body'>
						<div class='row'>
							<div class='alert alert-success alert-dismissable'>
	  						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	  						La <strong>ficha</strong> se modificó con exito!
						</div>";
				 }
				}
				
			?>
				<div class="panel-body">
					<div class="row">
						<a href="anadir_ficha.php" class="btn btn-success pull-left">Añadir Ficha <i class="glyphicon glyphicon-plus"></i></a><br><br>
						<div class="col-md-10 col-md-offset-1">
							<table class=" table table-hover">
							<br>
								<tr>
									<td class="text-center"><strong>Ficha</strong></td>
									<td class="text-center"><strong>Acciones</strong></td>
								</tr>
								<script src="js/jquery-3.1.1.js"></script>
								<script src="js/bootstrap.min.js"></script>
								<script>
									$(document).ready(function(){
    									$('[data-toggle="tooltip"]').tooltip(); 
									});
								</script>
								<?php 

									if (!empty($nav)) {
										$nav=$_POST['navb'];
									$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
									$insertar = mysqli_query($conexion, "SELECT * FROM fichas where ficha='$nav'");
									


									}else{
									
										$conexion = mysqli_connect('localhost', 'root', '', 'programacion_trimestral');
									    $insertar = mysqli_query($conexion, "SELECT * FROM fichas");
									    
									}
									
									
									while ($row = mysqli_fetch_array($insertar)) {
										echo "
											<tr>
												<td class='text-center'>".$row['ficha']."</td>
												<td class='text-center'>
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