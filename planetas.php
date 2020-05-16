<?php
require ('funciones.php');
	session_start();
	if (isset($_SESSION["usuario"])):
		$usuario=$_SESSION["usuario"];
		$n_visitante = $_SESSION["visitantes"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema Solar</title>
	<script src="js/cargaHTML.js"></script>
	<link rel="stylesheet" href="css/practicas.css">
</head>
<body style="background-color: #b197fc;">
<?php
			//Trae la barra de navegación junto con sus estilos
			//y la función para mostrar la fecha y hora
			require('nav.php');
		?>
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
			<ul>
			<li><a href="menu_practicas.php">Menú de prácticas</a></li>
			<li><a href="principal.php">Página principal</a></li>
			</ul>
		</ol>
		<iframe src="planetas/mercurio.html" frameborder="0" class="contenedor" id="frame">
			
		</iframe>
	</div>
</body>
</html>
<?php
	else:
		$prog='acceso.php';
		header("Location: $prog");
	endif;
?>
