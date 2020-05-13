<?php
//Selecciona una línea aleatoria de un archivo de texto
	function lineaAleatoria($nombreArchivo){
		$temp = file($nombreArchivo);
		shuffle($temp);
		return explode("&",$temp[0]);
	}

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
		<script src="global.js"></script>
		<link rel="stylesheet" href="principal.css">
		<title>Mi Página Web</title>
	</head>
	<body>
		
		<div>
			<table class="bar_nav">
				<tr>
					<td>
						<p>Fecha: <span id="fecha"><span></p>
						<p><span id="hora"></span> hrs.</p>
					</td>
					<td>
						<!-- Imprime el número de visitantes -->
						<p>Número de visitante:
							<?=$n_visitante;?>
						</p>
					</td>
					<td>

					</td>
					<td>
						<p>Cambiar idioma:</p>
						<img src="img/lang/eng.gif" alt="Inglés" height="25px">
						<img src="img/lang/es.gif" alt="Español" height="25px">
					</td>
					<td>
						<p>Usuario actual:</p>
						<p><?=$usuario;?></p>
						<a href='cerrar_sesion.php'>Cerrar sesión</a>
					</td>
				</tr>
			</table>
		</div>
		<div class='titulo'>
			<h1>BIENVENIDOS A MI PAGINA PRINCIPAL</h1>
		</div>
		<h2 class="titulo_frase">La frase del día es:</h2>
		<div class="contenedor_frase">
			
		<!-- Lee e imprime las frases -->
			<?php
			$informacion_frases = lineaAleatoria("frases.txt");
			?>
			<q class='frase'><?=$informacion_frases[0];?></q>
			<br>
			<i class='autor'><?=$informacion_frases[1];?></i>

		</div>
		<div class="contenedor_tabla_img">
			<table class='tabla_imagenes'>
				<tr class="fila_tabla_img">
					<td>
						<!-- Lee e imprime los lugares -->
						<?php
							$informacion_lugares = lineaAleatoria("lugares.txt");
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
							$informacion_mascotas = lineaAleatoria("mascotas.txt");
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
