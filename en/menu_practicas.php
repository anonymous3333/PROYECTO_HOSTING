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
	<title>Practices</title>
	<link rel="stylesheet" href="../css/menu_practicas.css">
</head>
<body>
	<?php
		//Trae la barra de navegación junto con sus estilos
		//y la función para mostrar la fecha y hora
		require('nav.php');
		require('frase_dia.php');
	?>
	<div class="contenedor_lista">
		<h1>Practices</h1>
		<a href="planetas.php">Solar System</a>
		<a href="volumenes.php">Volumes</a>
		<a href="pitagoras.php">Pythagoras theorem</a>
		<a href="principal.php">Back</a>
	</div>
</body>
</html>
<?php else:
	$prog='acceso.php';
	header("Location: $prog");
	endif;
?>
