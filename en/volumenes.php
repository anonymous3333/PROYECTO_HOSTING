<?php
require ('funciones.php');
	session_start();
	if (isset($_SESSION["usuario"])):
		$usuario=$_SESSION["usuario"];
		$n_visitante = $_SESSION["visitantes"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Volumes</title>
	<script src="../js/cargaHTML.js"></script>
	<link rel="stylesheet" href="../css/practicas.css">
</head>
<body style="background-color: #4dabf7;">
	<?php
		require('nav.php');
		require('frase_dia.php');
	?>
	<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('volumenes/cubo.html');">Cube</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cilindro.html');">Cylinder</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cono.html');">Cone</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/prisma_rectangular.html');">Rectangular Prism</a></li>
			<ul class="regresar">
			<li><a href="menu_practicas.php">Practices</a></li>
			<li><a href="principal.php">Start</a></li>
			</ul>
		</ol>
		<iframe src="volumenes/cubo.html" frameborder="0" class="contenedor" id="frame">
			
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