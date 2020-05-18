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
	<title>Menú de prácticas</title>
	<link rel="stylesheet" href="css/menu_practicas.css">
</head>
<body>
	<?php
		//Trae la barra de navegación junto con sus estilos
		//y la función para mostrar la fecha y hora
		require('nav.php');
		require('frase_dia.php');
	?>
	<div class="contenedor_lista">
		<h1>Menú de prácticas</h1>
		<a href="planetas.php">Sistema Solar</a>
		<a href="volumenes.php">Volúmenes</a>
		<a href="pitagoras.php">Teorema de pitágoras</a>
		<a href="principal.php">Volver</a>
	</div>
</body>
</html>
<?php else:
	$prog='acceso.php';
	header("Location: $prog");
	endif;
?>
