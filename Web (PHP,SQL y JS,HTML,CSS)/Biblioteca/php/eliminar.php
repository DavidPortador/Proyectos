<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/estiloweb.css" />
	<title>Biblioteca</title>
</head>
<body>
	<!-- Java Script -->
	<script type="text/javascript">
		alert("Proceso de Eliminacion");
	</script>
	<div id="arriba">
		<a style="display: block; height: 100%;" href="../index.html"></a>
	</div><br>
	<br><h1>Eliminar Libro</h1><br>
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
		<form action="eliminado.php" method="post">
			Se Eliminara el Libro con ID:
			<input type="number" name="numeroe" value="1" min="1" max="1000">
			<input type="submit" name="boton" value="Aceptar">
			<br><br><br>
		</form>
		<center>
			<?php
			$conexion = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($conexion, 'biblioteca');
			$resultado = mysqli_query($conexion, "SELECT id,nombre,categoria,estado FROM libros");
			echo "<table border='1px solid black' padding='15px' width='40%'>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo "<th>Nombre del Libro</th>";
			echo "<th>Categoria</th>";
			echo "<th>Estado</th>";
			echo "</tr>";
			while($fila = mysqli_fetch_array($resultado)){
				echo "<tr align='center'><td>".$fila['id']."</td><td>".$fila['nombre']."</td><td>".$fila['categoria']."</td><td><b>".$fila['estado']."</b></td></tr>";
			}
			?>
		</center>
	</table>
</div>		
</body>
</html>
