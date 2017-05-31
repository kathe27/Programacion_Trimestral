<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Instructores</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
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
        <form method="POST" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" name="navb" class="form-control" placeholder="Buscar">
          </div>
          <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-zoom-in"></i></button>
        </form>
      </div>
    </nav>
  
      <?php 
      if($_POST){
        $nav=$_POST['navb'] ;
      }
      ?>
  <div class="container-fluid">
  
    <h1 class="text-center" >Lista de  Instructores</h1><br>
  </div>
  <hr>
    <br>

<div class="col-md-8 col-md-offset-2" >
  <a  class="btn btn-success " href="anadir.php">Añadir Instructor
    <i  class="glyphicon glyphicon glyphicon-plus" ></i>

  </a><br><br>


  <table class="text-center table table-hover">

    <tr class="text-center">
      <td><strong>Nombre</strong></td>
      <td><strong>Acciones</strong></td>


    </tr>
     <script src="js/jquery-3.1.1.js"></script>
     <script src="js/bootstrap.js"></script>
       <script src="js/bootstrap.min.js"></script>
  


  

  <?php 


     if(!empty($nav)){
        $nav = $_POST['navb'];
    $con = mysqli_connect('localhost','root','','programacion_trimestral');
    $sql = mysqli_query($con, "SELECT * FROM instructores WHERE nombres = '$nav'");

   


      }else{
        $con = mysqli_connect('localhost','root','','programacion_trimestral');

    $sql = mysqli_query($con, "SELECT * FROM instructores");
      }
    

    while($row = mysqli_fetch_array($sql)){ ?>
      <tr>
          <td><?php echo $row['nombres'] ?></td>
          <td>
            <a class='btn btn-info' href='consultar_instructor.php?id=<?php echo $row['id'] ?>' >
              
              <i data-toggle='tooltip' data-placement="top" title="Consultar" class='glyphicon glyphicon-search' ></i>
            </a>
            
            <a class='btn btn-success' href='Modificar.php?id=<?php echo $row['id'] ?>'>
              <i data-toggle='tooltip' data-placement='top' title='Modificar' class='glyphicon glyphicon-pencil' ></i>
            </a>
            <a class='btn btn-danger' href='<?php  ?> delete.php?id=<?php echo $row['id'] ?>'>
              <i data-toggle=tooltip data-placement='top' title='Eliminar' class='glyphicon glyphicon-trash' ></i>
            </a>
            
          </td>
        </tr>

   <?php } ?> 
   
  </table>
</div>

  <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip(); 
      });
     </script>
  
</body>
</html>