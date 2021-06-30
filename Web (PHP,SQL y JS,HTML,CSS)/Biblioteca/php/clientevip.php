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
	<br><h1>Proceso para agregar un Cliente Destacado</h1><br>
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
	<br><br><br><br><br>
	<center>
		<form action="clientevipadd.php" method="post">
			NC: <input type="number" name="nc" value="" min="1" max="999" required=""><br><br>
			Nombre : <input type="text" name="nombre" maxlength="25" required=""><br><br>
			Libro Favorito : <input type="text" name="libro" maxlength="25" required=""><br><br>
			<input type="submit" name="boton" value="Aceptar">
			<br><br><br>
		</form>
	</center>
	<br><br><br><br><br><br><br><br>
	<div align="center" id="finalpa">BIBLIOTECA<br>
		Dirección: Celaya, Gto.<br>
		Abierto hoy Horario de cierre: 16:00<br>
		Ciudad Industral. C.P. 38020<br>    
		Celaya, Guanajuato. México.
	</div>	
</body>
</html>