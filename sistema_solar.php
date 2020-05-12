<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Solar</title>
	<script src="cargaHTML.js"></script>
	<link rel="stylesheet" href="practicas-global.css">
	<link rel="stylesheet" href="sistema-solar.css">
</head>
<body>
	<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('planetas/mercurio.html');">Mercurio</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/venus.html');">Venus</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/tierra.html');">Tierra</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/marte.html');">Marte</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/jupiter.html');">Júpiter</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/saturno.html');">Saturno</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/urano.html');">Urano</a></li>
			<li><a href="#" onclick="cargaHTML('planetas/neptuno.html');">Neptuno</a></li>
		</ol>
		<iframe src="planetas/mercurio.html" frameborder="0" class="contenedor" id="frame">
			
		</iframe>
	</div>
</body>
</html>