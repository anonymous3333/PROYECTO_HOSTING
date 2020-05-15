<?php
require ('linea_aleatoria.php');
function diaDeLaSemana(){
	$fecha = getdate();
	switch($fecha["wday"]){
		case 0:
			$diasemana="¡ Feliz Domingo - Dia del Sol !";
			break;
			case 1:
			$diasemana="¡ Feliz Lunes - dia de la Luna !";
			break;
			case 2:
			$diasemana="¡ Feliz Martes - dia de Marte !";
			break;
			case 3:
			$diasemana="¡ Feliz Miercoles - Dia de Mercurio !";
			break;
			case 4:
			$diasemana="¡ Feliz Jueves - Dia de Júpiter !";
			break;
			case 5:
			$diasemana="¡ Feliz Viernes - Dia de Venus !";
			break;
			case 6:
			$diasemana="¡ Feliz Sábado - Dia de Saturno !";
			break;
	}
	return $diasemana;
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
		<script src="js/global.js"></script>
		<link rel="stylesheet" href="css/principal.css">
		<title>Mi Página Web</title>
	</head>
	<body>
		
		<div>
			<table class="bar_nav">
				<tr>
					<td>
						<p><span id="fecha"><span></p>
						<p><span id="hora"></span> hrs.</p>
					</td>
					<td>
						<!-- Imprime el número de visitantes -->
						<p>Número de visitante:
							<?=$n_visitante;?>
						</p>
					</td>
					<td class="contenedor-dia-semana">
						<?=diaDeLaSemana();?>
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
