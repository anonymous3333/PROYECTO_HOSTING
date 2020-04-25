<?php
	session_start();
	if (isset($_SESSION["usuario"],$_SESSION["visitantes"])):
		$usuario=$_SESSION["usuario"];
		$visitante = $_SESSION["visitantes"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menú de prácticas</title>
	<link rel="stylesheet" href="estilos_menu_practicas.css">
</head>
<body>
	<div class="info">
		<p>Usuario actual:
			<?=$usuario;?>
		</p>
		<p>
			Número de visitante:
			<?=$visitante;?>
		</p>
	</div>
	<div class="contenedor_lista">
		<h1>Menú de prácticas</h1>
		<a href="#">Sistema Solar</a>
		<a href="#">Idiomas</a>
		<a href="#">Figuras</a>
		<a href="#">IMC</a>
		<a href="#">Formulario:alta alumnos</a>
		<a href="principal.php">Volver</a>
	</div>
</body>
</html>
<?php else:?>

<?php endif;?>
