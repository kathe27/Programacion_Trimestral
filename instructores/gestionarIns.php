<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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


<div class="panel panel-primary col-md-8 col-md-offset-2 ">
  <div class="panel-heading panel-primary">Gestionar Instructores</div>
  <div class="panel-body">
  <a class="btn btn-success glyphicon glyphicon-plus" href="anadir.php">Añadir</a>
    Realizar acciones

    <?php 

    	$con = mysqli_connect("localhost","root","","programacion_trimestral");
    	$query = mysqli_query($con ,"SELECT * FROM  instructores ");

    ?>
	<table class='table table-striped table-hover'>

    		       <tr>

    				<td>id</td>
    				<td>Nombre</td>
    				<td>Apellidos</td>
    				<td>Especialidad</td>
    				<td>Apoyo grupo</td>
    				<td>tipo contrato</td>
    				<td>cantidad horas</td>
    				<td>restriciones</td>
    				<td>Horario</td>
    				<td>Eliminar</td>
    				<td>Modificar</td>
    				
    				
    			  </tr>
    <?php 			  
    	while($row=mysqli_fetch_array($query)) {
    ?>
    		

    		<tr><td><?php echo $row['id'] ; ?></td>
    		<td><?= $row['nombre']?> </td>
    		<td><?= $row['apellidos']?></td>
    		<td><?= $row['especialidad']?></td>
    		<td><?= $row['apoyo_grupos']?></td>
    		<td><?= $row['tipo_contrato']?></td>
    		<td><?= $row['cantidad_horas']?></td>
    		<td><?= $row['restricciones']?></td>
    		<td><?= $row['horario']?></td></td>
    		<td><a class="btn btn-danger glyphicon glyphicon-remove eliminar"
    								data-toggle="tooltip"
									data-placement="top"
									title="Eliminar"
									data-id="<?= $row['id']?>"></a></td>
    		<td><a class="btn btn-success glyphicon glyphicon-pencil" href="modificar.php?id=<?php echo $row['id'] ?>"></a></td>
    		






						
    		</tr>

    		   		
    	<?php } ; ?> 
    		</table>

     
  </div>
</div>
	

	<script src="js/jquery-3.2.1.min.js"> </script>

	<script src="js/bootstrap.min.js"></script>


	<script>
		$(document).ready(function(){
			$('[data-toogle="tooltip"]').tooltip();
			$('.eliminar').click(function(event) {
				if (confirm('¿Realmente desea eliminar este avatar?')) {
					$id=$(this).attr('data-id');
					window.location.replace('delete.php?id='+$id);
				}
				});
		});
	</script>

</body>
</html>