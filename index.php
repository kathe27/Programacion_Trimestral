<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programacion Trimestral</title>
	<link rel="stylesheet" href="ambientes/css/bootstrap.min.css">
	<link rel="stylesheet" href="ambientes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="ambientes/css/index.css">
	<link rel="stylesheet" href="ambientes/css/owl.carousel.min.css">
	<link rel="stylesheet" href="ambientes/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="ambientes/css/animate.css">
</head>

<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><img id="img1" src="ambientes/imgs/sena.png" class="img-rounded" width="100" height="100"></a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="#">Inicio</a></li>
		      <li><a href="ambientes/ambientes.php">Ambientes</a></li>
		      <li><a href="fichas/index_ficha.php">Fichas</a></li>
		      <li><a href="instructores/gestionarIns.php">Instructores</a></li>
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
		<h1 class="display-1 text-center">PROGRAMACION TRIMESTRAL</h1>
	</div>


	<section class="owl-carousel ">
		<img class="img2" src="ambientes/imgs/slider1.jpg" alt="">
		<img class="img2" src="ambientes/imgs/slider2.jpg" alt="">
		<img class="img2" src="ambientes/imgs/slider3.jpg" alt="">
	</section>
	<br>

	<div class="col-md-8 col-md-offset-2 mov2 animated bounceInLeft">
		<div class="col1">
			<h1 class="text-center">Misión</h1>
			<p>El SENA está  encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.</p>
		</div>
		<div class="col1">
			<h1 class="text-center">Visión</h1>
			<p>En el 2018 el SENA será reconocido por la efectividad de su gestión, sus aportes al empleo decente y a la  generación de ingresos, impactando la productividad de las personas y de las empresas; que incidirán positivamente en el desarrollo de las regiones como contribución a una Colombia educada, equitativa y en paz.​</p>
		</div>

	</div>
	
	




	<script src="ambientes/js/jquery-3.1.1.js"></script>
	<script src="ambientes/js/owl.carousel.min.js"></script>
	<script>
			autoplay:false
			autoplayTimeout:5000
			autoplayHoverPause:false

			var owl = $('.owl-carousel');
			owl.owlCarousel({
		    items:2,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:2200,
		    autoplayHoverPause:false
		});
		
	</script>
	


</body>
</html>