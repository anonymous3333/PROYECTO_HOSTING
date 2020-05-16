<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<?php if($_SESSION["usuario"]!="invitado"):?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teorema de Pitágoras</title>
	<script src="js/cargaHTML.js"></script>
	<link rel="stylesheet" href="css/practicas.css">
</head>
<body>
<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-hipotenusa.html');">Calcular hipotenusa</a></li>
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-cateto-opuesto.html');">Calcular cateto opuesto</a></li>
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-cateto-adyacente.html');">Calcular cateto adyacente</a></li>
		</ol>
		<iframe src="pitagoras/calcular-hipotenusa.html" frameborder="0" class="contenedor" id="frame">
			
		</iframe>
	</div>
</body>
	<?php else:?>
	<head>
		<meta charset="UTF-8"> 
		<title>Acceso restringido</title>
	</head>
	<body>
	<p>No puedes acceder a esta página.</p>
	<a href="principal.php">Regresar a la página principal</a>
	<a href="menu_practicas.php">Regresar al menú de prácticas</a>
	</body>
	<?php endif;?>
</html>
