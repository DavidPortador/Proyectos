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
	<br><h1>Historial de Reportes</h1><br>
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
	</div><br><br><br><br><br>
	<div id="central">
		<center>
			<?php
			$conexion = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($conexion, 'biblioteca');
			$resultado = mysqli_query($conexion, "SELECT nrep,libro,accion FROM reportes");
			echo "<table border='1px solid black' padding='15px' width='40%'>";
			echo "<tr>";
			echo "<th>Reporte</th>";
			echo "<th>Nombre del Libro</th>";
			echo "<th>Accion</th>";
			echo "</tr>";
			while($fila = mysqli_fetch_array($resultado)){
				echo "<tr align='center'><td>".$fila['nrep']."</td><td>".$fila['libro']."</td><td>".$fila['accion']."</td>"."</tr>";
			}
			?>
		</center>
	</table>
</div>		
</body>
</html>
