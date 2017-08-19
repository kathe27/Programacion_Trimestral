<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ambientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="../instructores/imgs/logoSena.png">
</head>
<body>


	

		<nav class="navbar navbar-inverse ">
		  <div class="container-fluid">
		    <div class="navbar-header">
		       <a class="navbar-brand" href="#"><img id="img1" src="imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="../index2.php">Inicio</a></li>
		      <li><a href="#">Ambientes</a></li>
		      <li><a href="../fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="../instructores/gestionarIns.php">Instructores</a></li>
		    </ul>
		    <form method="post" class="navbar-form navbar-right">
		      <div class="form-group">
		        <input type="text" name="navb" class="form-control" placeholder="Buscar">
		      </div>
		      <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
		    </form>
		  </div>
		</nav>

	<?php if ($_POST) {
		$nav=$_POST['navb'];
	} ?>

	<div class="container-fluid">
	
		<h1 class="text-center" >Lista de  Ambientes</h1><br>
	</div>
	<hr>
		<br>

<div class="col-md-8 col-md-offset-2" >
	 <?php 


		if ($_GET) {
			$elimino = $_GET['val'];
		
			if ($elimino == 'elimino') {			   
			   echo "<div class='panel-body'>
            <div class='row'> 
              <div class='alert alert-success alert-dismissable'>
                <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>El ambiente</strong> se ha eliminado!
            </div>";
			}

			if ($elimino == 'noelimino') {
			   echo "<div class='panel-body'>
            <div class='row'> 
              <div class='alert alert-success alert-dismissable'>
                <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>El ambiente</strong> no se pudo eliminar! 
            </div>";
			}
		}

	
        if ($_GET) {
          
          $valor=$_GET['val'];

          if ($valor=='a') {
            echo "<div class='panel-body'>
            <div class='row'> 
              <div class='alert alert-success alert-dismissable'>
                <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>El ambiente</strong> se adicionado con exito!
            </div>";
         } 

         if ($valor=='d') {
            echo "<div class='panel-body'>
            <div class='row'> 
              <div class='alert alert-success alert-dismissable'>
                <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>El ambiente</strong> se ha eliminado con exito!
            </div>";
         } 

         if ($valor=='ed') {
            echo "<div class='panel-body'>
            <div class='row'> 
              <div class='alert alert-success alert-dismissable'>
                <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>El ambiente</strong> se ha modificado con exito!
            </div>";
         } 
       }
    ?>
	<a  class="btn btn-success " href="anadir_ambiente.php">Añadir Ambiente
		<i  class="glyphicon glyphicon glyphicon-plus" ></i>
	</a><br><br>


	<table class="table table-hover">

		<tr>
			<td><strong>Nombre</strong></td>
			<td><strong>Acciones</strong></td>


		</tr>
		 <script src="js/jquery-3.1.1.js"></script>
		 <script src="js/bootstrap.js"></script>
	     <script src="js/bootstrap.min.js"></script>

	     

	<?php 


		if (!empty($nav)) {
			$con = mysqli_connect('localhost','root','','programacion_trimestral');
		$nav=$_POST['navb'];
		$sql = mysqli_query($con, "SELECT * FROM ambientes WHERE nombre LIKE '%".$nav."%'");
		}else{
			$con = mysqli_connect('localhost','root','','programacion_trimestral');

		$sql = mysqli_query($con, "SELECT * FROM ambientes");
		}

		while($row = mysqli_fetch_array($sql)){ ?>
			<tr>
					<td><?php echo $row['nombre'] ?></td>
					<td>
			
						<a class='btn btn-info' href='consultar_ambiente.php?id=<?php echo $row['id'] ?>'>
							<i data-toggle='tooltip' data-placement='top' title='Consultar'  class='glyphicon glyphicon-search' ></i>
						</a>
						
						<a class='btn btn-success' href='modificar_ambiente.php?id=<?php echo $row['id'] ?>'>
							<i data-toggle='tooltip' data-placement='top' title='Modificar' class='glyphicon glyphicon-pencil' ></i>
						</a>
						<a class='btn btn-danger btn-delete' data-delete="<?=$row['id']?>">
							<i data-toggle='tooltip' data-placement='top' title='Eliminar' class='glyphicon glyphicon-trash' ></i>

						</a>
							<a class='btn btn-default' href="../calendario<?=$row['id']?>/index.php?id=<?php echo $row['id'] ?>&&men=bien"> <?= $row['nombre'] ?>
							<i data-toggle='tooltip' data-placement='top' title='Horario' class='glyphicon glyphicon-time' ></i>
						</a>
						
					</td>
				</tr>

		<?php } ?>
						

						
	</table>
</div>


	<script>
		$(document).ready(function() {
			$('.btn-delete').click(function(event) {
				
				if (confirm('Realmente desea eliminar este ambiente?')){
					$id = $(this).attr('data-delete');
					window.location.replace('eliminar_ambientes.php?id='+$id);
			}
			});
		});
	</script>
	
</body>
</html>