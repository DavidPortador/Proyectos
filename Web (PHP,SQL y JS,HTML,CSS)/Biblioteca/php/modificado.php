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
	<br><h1>¡Accion Exitosa!</h1><br>
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
		$numero=$_POST['numero'];
		echo "Resultado del CheckBox: ".$numero."<br>";
		if($numero==""){
			echo "Ingresar id";
		}else{
			$res = mysqli_query($conexion, "SELECT id,nombre,categoria,estado FROM libros where id=".$numero);
			$fil = mysqli_fetch_array($res);
			$est = $fil['estado'];
			$nom = $fil['nombre'];
			echo "Estado: ".$est."<br>";
			if($est=="disponible"){
				$pres = mysqli_query($conexion, "Update libros Set estado='prestado' where id=".$numero);
				$add = mysqli_query($conexion, "insert into reportes (libro,accion) values('".$nom."','pestado')");
				echo "¡Libro Prestado!<br>Reporte Generado";
			}if($est=="prestado"){
				$pres = mysqli_query($conexion, "Update libros Set estado='disponible' where id=".$numero);
				$add = mysqli_query($conexion, "insert into reportes (libro,accion) values('".$nom."','entregado')");
				echo "¡Libro Devuelto!<br>Reporte Generado";
			}if($est==""){
				echo "Error, ingresar un ID valida";
			}
		}
		?>
		<br><br><br><a href="../index.html" class="button">Volver al inicio</a>
	</center>	
</body>
</html>