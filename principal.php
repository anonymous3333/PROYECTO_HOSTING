<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="estilos_principal.css">
		<title>Mi Página Web</title>
	</head>
	<body>
		<!-- Sección de inicio del código php -->
		<?php
			session_start();
			if (isset($_SESSION["usuario"])){
				$usuario=$_SESSION["usuario"];
		?>
		
		<div>
			<table class="bar_nav">
				<tr>
					<td>
						<p>Usuario actual:</p>
						<p><?php echo $usuario ?></p>
					</td>
					<td class="idiomas">
						<p>Cambiar idioma:</p>
						<img src="img/lang/eng.gif" alt="Inglés" height="25px">
						<img src="img/lang/es.gif" alt="Español" height="25px">
					</td>
					<td>
						<!-- Imprime el número de visitantes -->
						<p>Número de visitante:
							<?php
								$n_visitante = $_SESSION["visitantes"];
								echo $n_visitante;
							?>
						</p>
						<a href='cerrar_sesion.php'>Cerrar sesión</a></td>
					<td></td>
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
			$archivo = "frases.txt";
			$frases = file($archivo);
			shuffle($frases);
			//echo $frases[0];
			$columnas = explode("&",$frases[0]);
			echo "<q class='frase'>".$columnas[0]."</q>"."<br>";
			echo "<i class='autor'>".$columnas[1]."</i>";
			?>
		</div>
		<div class="contenedor_tabla_img">
			<table class='tabla_imagenes'>
				<tr class="fila_tabla_img">
					<td>
						<!-- Lee e imprime los lugares -->
						<?php
							$archivo2 = "lugares.txt";
							$lugares = file($archivo2);
							shuffle($lugares);
							//echo $frases[0];
							$columnas = explode("&",$lugares[0]);
							echo "<p>Uno de mi lugares favoritos es:<br>";
							echo "<p>".$columnas[1]."</p>";
							echo "<img src='img/lugares/".$columnas[0]."'>"."<br>";
						?>
					</td>
					<td class="btn_continuar">
						<button onclick="window.location='menu_practicas.php'">Continuar</button>
					</td>
					<td>
						<!-- Lee e imprime las mascotas -->
						<?php
							$archivo3 = "mascotas.txt";
							$mascotas = file($archivo3);
							shuffle($mascotas);
							//echo $frases[0];
							$columnas = explode("&",$mascotas[0]);
							echo "<p>Unas de mi mascotas favoritas son:<br>";
							echo "<p>".$columnas[1]."</p>";
							echo "<img src='img/mascotas/".$columnas[0]."'>"."<br>";
						?>
					</td>
				</tr>
			</table>
		</div>
		<!-- Fin el if-else -->
		<?php
			}else{
				$prog='acceso.php';
				header("Location: $prog");
			}
		?>
</body>
</html>