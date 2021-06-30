<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estiloweb.css" />
	<title>Biblioteca</title>
</head>
<body>
	<div id="arriba">
		<a style="display: block; height: 100%;" href="../index.html"></a>
	</div><br>
	<br><h1>Proceso de Eliminacion</h1><br>
	<!-- Ménú -->
	<div id="header">
		<nav>
			<ul class="nav">
				<li><a href="../html/novedades.html">Novedades</a></li>
				<li><a href="../html/nosotros.html">Nosotros</a></li>
				<li><a href="../html/calidad.html">Calidad</a></li>
				<li><a href="../html/historia.html">Historia</a></li>
				<li><a href="../html/populares.html">Populares</a></li>
			</ul>
		</nav>
	</div>
	<br><br><br><br><br><br>
	<center>
		<?php
		$conexion = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($conexion, 'biblioteca');
		$nc =$_POST['nc'];
		$no =$_POST['nombre'];
		$li =$_POST['libro'];
		$res = mysqli_query($conexion, "SELECT nc,nombre,librofav FROM clientesvip where nc=".$nc);
		$fil = mysqli_fetch_array($res);
		$enc = $fil['nc'];
		echo "Resultado del CheckBox: ".$nc."<br><br>";
		if($nc==$enc){
			echo "El NC ya Existe";
		}else{
			$add = mysqli_query($conexion, "INSERT INTO clientesvip VALUES(".$nc.",'".$no."','".$li."')");
			echo "<br><br>¡Cliente Agregado!<br>NC: ".$nc."<br>Nombre: ".$no."<br>Libro Favorito: ".$li;
		}
		?>
		<br><br><br><a href="../index.html" class="button">Volver al inicio</a>
	</center>	
</body>
</html>