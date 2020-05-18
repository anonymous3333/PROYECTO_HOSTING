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
	<title>Volúmenes</title>
	<script src="js/cargaHTML.js"></script>
	<link rel="stylesheet" href="css/practicas.css">
</head>
<body style="background-color: #4dabf7;">
	<?php
		require('nav.php');
		require('frase_dia.php');
	?>
	<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('volumenes/cubo.html');">Cubo</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cilindro.html');">Cilindro</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cono.html');">Cono</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/prisma_rectangular.html');">Prisma Rectangular</a></li>
			<ul>
			<li><a href="menu_practicas.php">Menú de prácticas</a></li>
			<li><a href="principal.php">Página principal</a></li>
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