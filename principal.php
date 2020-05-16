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
		<link rel="stylesheet" href="css/principal.css">
		<link rel="stylesheet" href="css/nav.css">
		<title>Mi Página Web</title>
	</head>
	<body>
		
		<?php
			//Trae la barra de navegación junto con sus estilos
			//y la función para mostrar la fecha y hora
			require('nav.php');
		?>
		<div class='titulo'>
			<h1>BIENVENIDOS A MI PAGINA PRINCIPAL</h1>
		</div>
		<h2 class="titulo_frase">La frase del día es:</h2>
		<div class="contenedor_frase">
			
		<!-- Lee e imprime las frases -->
			<?php
				if(isset($_SESSION["frase"],$_SESSION["autor"])):
					$frase = $_SESSION["frase"];
					$autor = $_SESSION["autor"];
			?>
			<q class='frase'><?=$frase;?></q>
			<br>
			<i class='autor'><?=$autor;?></i>
			<?php endif;?>
		</div>
		<div class="contenedor_tabla_img">
			<table class='tabla_imagenes'>
				<tr class="fila_tabla_img">
					<td>
						<!-- Lee e imprime los lugares -->
						<?php
							$informacion_lugares = lineaAleatoria("txt/lugares.txt");
						?>
						<p>Uno de mi lugares favoritos es:<br>
						<p><?=$informacion_lugares[1]?></p>
						<img src='img/lugares/<?=$informacion_lugares[0];?>'><br>
					</td>
					<td class="btn_continuar">
						<button onclick="window.location='menu_practicas.php'">Continuar</button>
					</td>
					<td>
						<!-- Lee e imprime las mascotas -->
						<?php
							$informacion_mascotas = lineaAleatoria("txt/mascotas.txt");
						?>
						<p>Unas de mi mascotas favoritas son:<br>
						<p><?=$informacion_mascotas[1]?></p>
						<img src='img/mascotas/<?=$informacion_mascotas[0]?>'><br>
					</td>
				</tr>
			</table>
		</div>
		
	</body>
</html>
<!-- Fin del if-else -->
<?php
	else:
		$prog='acceso.php';
		header("Location: $prog");
	endif;
?>
