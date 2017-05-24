<?php 
  session_start();
  if ($_POST) {
      $con = mysqli_connect("localhost", "root", "", "programacion_trimestral");
      if (mysqli_connect_errno()) {
          echo "No se puede conectar a la BD";
      }

      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];

      $sql = "SELECT * FROM login WHERE usuario =  '$usuario' AND clave = '$clave' ";
      $query = mysqli_query($con, $sql);
      if (mysqli_num_rows($query) > 0 ) {
          $row = mysqli_fecth_array($query);
          $_SESSION['usuario'] = $row['usuario']. " ". $row['clave'];
          header("location: index.php");
      }else{
        echo "<script>alert(Usuario o clave incorrectos)</script>";
      }

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="ambientes/css/bootstrap.min.css">
  <style>
    body {
      background-color: #E7E9E7;
    }
    .container-fluid {
      position: relative;
      top: 90px;
    }
    .box{
      position: relative;
      top: 100px;
    }
    h1 {
      background-color: #00C3DD;
      color: #fff;
      border-radius: 4px;
    }
    #ola {
      -webkit-box-shadow: -2px 4px 29px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -2px 4px 29px 0px rgba(0,0,0,0.75);
      box-shadow: -2px 4px 29px 0px rgba(0,0,0,0.75);
    }
    input.form-control {
      height: 40px;
      width: 400px;
    }
    input {
      position: relative;
      right: 40px;
    }
  </style>
</head>
<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 box">
          <div class="col-md-6 col-md-offset-3" id="ola">
          <h1 class="text-center">LOGIN</h1>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <form action="" method="POST">
                 <input type="text"  name="usuario" placeholder="Usuario*" class="form-control" required=""><br>
                 <input type="password" name="clave" placeholder="Contraseña*" class="form-control" required=""><br>
                  <button   class="btn btn-info">Ingresar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
 
</body>
</html>