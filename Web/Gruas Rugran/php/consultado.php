<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-sacle=1.0">
		<title>Gruas Rugran</title>
		<link rel="icon" type="image/png" href="../img/rg2.png">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	<body>
		<!-- Barra de Navegacion -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../index.html">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/mision.html">Misión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/vision.html">Visión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../html/valores.html">Valores</a>
					</li>
				</ul>
				<ul class='nav navbar-nav navbar-custom-menu navbar-right'>
					<button class="btn btn-outline-primary dropdown" type="submit" href="php/consultar.php">Consultar</button>
				</ul>
			</div>
		</nav>
		<!-- Barra de Navegacion -->
		<div class="container">
			<br><br><br><h1>Resultado de consulta de presupuesto</h1><br><br>
			<center>
			<?php
				$num =$_POST['num'];
				$col =$_POST['colonia'];
				$connection = mysqli_connect("localhost", "root", "");
				mysqli_select_db($connection, "rugran");
				$res = mysqli_query($connection, "SELECT * FROM colonias where nombre='".$col."'");
				$fil = mysqli_fetch_array($res);
				$pre = $fil['precio'];
				$tie = $fil['tiempo'];
				$cp = $fil['cp'];

				if ($tie=="") {
					echo "Seleccione una colonia valida"; 
				}else{

				echo "Telefono para contactar: <b>".$num."</b><br>";
				echo "Ubicacion: <b>Colonia ".$col."</b><br>";
				echo "Codigo Postal: <b>".$cp."</b><br>";
				echo "El costo aproximado del servio es de: <u><b>$".$pre."</b></u><br>";
				echo " Tiempo de espera aproximado: <u><b>".$tie." minutos</b></u><br>";
				echo "<small>Recuerda que el tiempo de espera y costo puede variar dependiendo el tipo de vehiculo, el recorrido, disponibilidad, problemas legales o imprevistos</small>";
				echo "<br><br><a href='sms:+4612612540?body=numero: ".$num.", colonia: ".$col."'>Enviar mensaje para solicitar el servicio</a><br><a href='tel:+4612612540'>O si prefiere llamar directamente</a><br><br>";
				echo "En caso de estar en PC <br><a href='mailto:david.raw172@gmail.com'> Enviar correo</a><br><br></center>";
				mysqli_close($connection);
				}
			?>
		</div>
		<div class="footer">
			<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
				<div class="container text-center">
					<small>Copyright &copy; 2019 Celaya Gruas RUGRAN </small>
				</div>
			</footer>
		</div>
	</body>
	</html>