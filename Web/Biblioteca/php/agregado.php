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
		$id =$_POST['id'];
		$no =$_POST['nombre'];
		$ca =$_POST['categoria'];
		$res = mysqli_query($conexion, "SELECT id,nombre,categoria,estado FROM libros where id=".$id);
		$fil = mysqli_fetch_array($res);
		$eid = $fil['id'];
		echo "Resultado del CheckBox: ".$id."<br><br>";
		if($id==$eid){
			echo "El ID ya Existe";
		}else{
			$add = mysqli_query($conexion, "INSERT INTO libros VALUES(".$id.",'".$no."','".$ca."','disponible')");
			echo "<br><br>¡Libro Agregado!<br>ID: ".$id."<br>Nombre: ".$no."<br>Categoria: ".$ca;
		}
		?>
		<br><br><br><a href="../index.html" class="button">Volver al inicio</a>
	</center>	
</body>
</html>