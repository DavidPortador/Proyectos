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
			<br><br><br><h1>Consulta de Presupuesto</h1><br><br>

			<!-- autocomplete -->

			<script>
				$( function() {
					var availableTags = [
					"10 de Abril",
					"15 de Mayo",
					"3 Guerras",
					"Alameda",
					"Álamo Country Club",
					"Álamos 3a Secc",
					"Álamos 5a Sección",
					"Alfredo Vázquez Bonfil",
					"Américas del Bajío",
					"Arboledas del Campestre",
					"Arboledas del Pedregal",
					"Arboledas de San Rafael",
					"Arcada Alameda",
					"Benito Juárez",
					"Bonanza",
					"Bosques de Chapultepec",
					"Bosques de La Alameda",
					"Bosques del Sol",
					"Brisas del Carmen",
					"Bugambilias",
					"Calesa",
					"Campestre Celaya",
					"Canal de Camargo",
					"Canal de Labradores",
					"Capitales de Europa",
					"Casa Blanca",
					"Celaya Centro",
					"Ciudadela",
					"Ciudad Industrial",
					"Claustros de Arboledas",
					"Conjunto Habitacional Girasoles",
					"Cuauhtémoc",
					"Del Bosque (Fraccionamiento)",
					"Del Bosque",
					"Del Parque",
					"Del Valle",
					"Don Gu",
					"Dos Plazas",
					"Ejidal",
					"El Atrio",
					"El Campanario",
					"El Campanario Residencial",
					"El Cantar",
					"El Dorado",
					"El Haba",
					"El Molino",
					"El Olivar",
					"El Panamericano",
					"El Paraíso de los Ángeles",
					"El Pueblito de San Ángel",
					"El Sillar",
					"El Vergel",
					"El Zapote",
					"Emeteria Valencia",
					"Emiliano Zapata",
					"Emiliano Zapata Norte",
					"Emiliano Zapata Sur",
					"Enrique Colunga",
					"Esmeralda",
					"Excelari",
					"Felipe Ángeles",
					"Floresta del Sur",
					"FOVISSSTE",
					"Galaxias del Parque",
					"Geo Villas Los Sauces",
					"Gobernadores",
					"Granada",
					"Gran Clase",
					"Guadalupe",
					"Guanajuato",
					"Hacienda del Bosque",
					"Hacienda del Sol",
					"Hidalgo",
					"Imperial",
					"IMSS",
					"Independencia",
					"Industriales",
					"Jacarandas",
					"Jardines de Celaya 1a Secc",
					"Jardines de Celaya 2a Secc",
					"Jardines de Celaya 3a Secc",
					"Jardines del Centro",
					"Jardines del Malecón",
					"Jardines del Sur",
					"José Suárez Irigoyen",
					"Juan Pablo II",
					"Karina",
					"La Aurora",
					"La Aurora",
					"La Campiña",
					"La Capilla",
					"La Condesa", 
					"La Cruz",
					"La Esperanza",
					"La Favorita",
					"La Fundación",
					"La Herradura",
					"La Joya",
					"La Misión",
					"La Rinconada de San Miguel",
					"Las Alamedas",
					"Las Américas",
					"Las Arboledas",
					"Las Aves",
					"Las Brisas",
					"Las Carretas",
					"Las Casas",
					"Las Compuertas del Campestre",
					"Las Delicias",
					"Las Flores",
					"Las Fuentes",
					"Las Insurgentes",
					"La Soledad",
					"Las Palmas",
					"Las Praderas",
					"Latinoamericana",
					"La Toscana Residencial",
					"Lázaro Cárdenas",
					"Lindavista",
					"López Portillo",
					"Los Ángeles",
					"Los Arrayanes",
					"Los Frailes",
					"Los Impresionistas",
					"Los Lagos",
					"Los Laureles 1a Secc",
					"Los Laureles 2a Secc",
					"Los Naranjos",
					"Los Olivos Residencial",
					"Los Pinos",
					"Los Pirules",
					"Los Pirules",
					"Los Portones",
					"Los Santos",
					"Los Sauces",
					"Los Tules",
					"Los Veintes",
					"Mediterráneo",
					"México",
					"Miguel Alemán",
					"Misión de La Esperanza",
					"Misión de los Álamos", 
					"Misión Santa Fe",
					"Moctezuma",
					"Monte Blanco",
					"Monte de Camargo",
					"Nat Tha Hi",
					"Nuevo Celaya",
					"Nuevo Tecnológico",
					"Obrero Mundial",
					"Palas Atenea",
					"Palma Real",
					"Parque Central",
					"Parque Verde",
					"Paseo de los Álamos",
					"Paseo Floresta",
					"Paseos del Campestre",
					"Porta Maggiore",
					"Portones de la Hacienda",
					"Praderas de La Hacienda",
					"Praderas de La Palmita",
					"Praderas del Bosque",
					"Praderas del Campestre",
					"Praderas de Santa Julia",
					"Praderas de Santa Lucía",
					"Privada del Pedregal",
					"Privada el Sauz",
					"Progreso Solidaridad",
					"Providencia",
					"Puertas del Sol",
					"Puertas de Santa María",
					"Quinta Arboledas",
					"Quinta Boulevard",
					"Quinta Bugambilias",
					"Quinta Santa María",
					"Raquet Club Cross",
					"Real de Arboledas",
					"Real de Celaya",
					"Recursos Hidráulicos",
					"Reforma",
					"Reforma",
					"Renacimiento",
					"Residencial",
					"Residencial Alameda",
					"Residencial Las Margaritas",
					"Residencial Paraíso",
					"Residencial Santiago",
					"Residencial Tecnológico",
					"Residencial Xochipilli",
					"Resurrección",
					"Revolución",
					"Rinconada del Bosque",
					"Rinconada Laureles",
					"Rinconada Los Álamos",
					"Rinconada San Jorge",
					"Riveras del Campestre",
					"Rosalinda",
					"San Andrés",
					"San Antonio",
					"San Antonio",
					"San Francisco",
					"San Gabriel",
					"San José de Torres",
					"San Juan",
					"San Juan de Dios",
					"San Juanico",
					"San Juanico 1a Secc",
					"San Juanico 2a Secc",
					"San Martín de Camargo",
					"San Miguel",
					"San Miguel",
					"San Rafael",
					"Santa Anita",
					"Santa Bárbara",
					"Santa Cecilia",
					"Santa Cecilia",
					"Santa Isabel",
					"Santa Lucia",
					"Santa María",
					"Santa María",
					"Santa Rita",
					"Santa Teresa",
					"Santiaguito",
					"Santo Cristo",
					"Socialista",
					"Suiza",
					"Tahi",
					"Tierra Blanca",
					"Tierras Negras",
					"Tierra y Libertad",
					"Valle de La Primavera",
					"Valle de los Girasoles",
					"Valle de los Naranjos III Sección",
					"Valle de los Naranjos II Sección",
					"Valle del Real",
					"Valle Hermoso",
					"Valle Naranjos",
					"Valle Residencial",
					"Villa Arbolada",
					"Villa de Celaya",
					"Villa de los Álamos",
					"Villa de Los Arcos",
					"Villa de los Reyes",
					"Villa Jardín",
					"Villas de Benavente",
					"Villas de Celaya",
					"Villas de La Esperanza",
					"Villas de La Hacienda",
					"Villas del Bajío",
					"Villas del Benavente II",
					"Villas del Paraíso",
					"Villas del Rocío",
					"Villas del Romeral",
					"Villas del Tenis",
					"Villas Quetzal",
					"Villas Reales",
					"Villas San Ángel",
					"Villas Vicenza",
					"Viñas de La Herradura",
					"Virgen del Refugio",
					"Zempoala",
					"Zona de Oro",
					"Zona de Oro del Bajío"
					];
					$( "#tags" ).autocomplete({
						source: availableTags
					});
				} );
			</script>

			<div class="ui-widget">
			<form action="consultado.php" method="post">
				Numero de Telefono para contactar.<br><br>
				Numero: <input type="number" name="num" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required="" /><i>(Máximo 10 dígitos)</i><br><br><br>
				Seleccionar la colonia donde necesita el servicio.<br><br>
				<label for="tags">Colonia: </label>
				<input id="tags" name="colonia" required="">
				<br><br><button class="btn btn-primary" href="">Consultar</button>
			</form>
			</div>

			<!-- autocomplete -->
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