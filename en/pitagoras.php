<?php
	require ('funciones.php');
	session_start();
	if (isset($_SESSION["usuario"])):
		$usuario=$_SESSION["usuario"];
		$n_visitante = $_SESSION["visitantes"];
?>
<!DOCTYPE html>
<html lang="en">
	<?php if($_SESSION["usuario"]!="invitado"):?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pythagoras Teorem</title>
	<script src="../js/cargaHTML.js"></script>
	<link rel="stylesheet" href="../css/practicas.css">
</head>
<body style="background-color: #fff9db;">
	<?php
		require('nav.php');
		require('frase_dia.php');
	?>
	<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-hipotenusa.html');">Calculate hypotenuse</a></li>
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-cateto-opuesto.html');">Calculate Opposite Cathetus</a></li>
			<li><a href="#" onclick="cargaHTML('pitagoras/calcular-cateto-adyacente.html');">Calculate Adjacent Cathetus</a></li>
			<ul class="regresar">
			<li><a href="menu_practicas.php">Practices</a></li>
			<li><a href="principal.php">Back</a></li>
			</ul>
		</ol>
		
		<iframe src="pitagoras/calcular-hipotenusa.html" frameborder="0" class="contenedor" id="frame">
			
		</iframe>
	</div>
</body>
	<?php else:?>
	<head>
		<meta charset="UTF-8"> 
		<title>Access Restricted</title>
	</head>
	<body>
	<p>You have no permission to see this page.</p>
	<a href="principal.php">Back</a>
	<a href="menu_practicas.php">Start</a>
	</body>
	<?php endif;?>
</html>
<?php
	else:
		$prog='acceso.php';
		header("Location: $prog");
	endif;
?>
