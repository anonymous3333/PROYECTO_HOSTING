<?php

	session_start();

	if (isset($_SESSION["usuario"])){

		$usuario=$_SESSION["usuario"];

?>

	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="estilos_principal.css">
		<title>Mi Página Web</title>
	</head>
	<body>
		<?php

			echo "<div align='right'>Usuario: $usuario <a href='cerrar_sesion.php'>Cerrar sesión</a></div><br><br>";

			echo "<div align='center'><table class='tabla1'><tr><td class='celda1_t1'>BIENVENIDOS A MI PAGINA PRINCIPAL</td></tr></table></div><br><br>";

			echo "<div class='tabla2'>LA FRASE DEL DIA ES: </div>";

			$archivo = "frases.txt";
			$frases = file($archivo);
			shuffle($frases);
			//echo $frases[0];
			$columnas = explode("&",$frases[0]);
			echo "<q>".$columnas[0]."</q>"."<br>";
			echo "<i>".$columnas[1]."</i>";

			echo "<br><br>
			<div>
				<table class='tabla3'>
					<tr>
						<td class='celda1_t3'>";
						$archivo2 = "lugares.txt";
						$lugares = file($archivo2);
						shuffle($lugares);
						//echo $frases[0];
						$columnas = explode("&",$lugares[0]);
						echo "<p>Uno de mi lugares favoritos es:<br>";
						echo "<p>".$columnas[1]."</p>";
						echo "<img src='img/lugares/".$columnas[0]."'>"."<br>";
						echo "</td>";
						echo "<td class='celda2_t3'>";
						$archivo3 = "mascotas.txt";
						$mascotas = file($archivo3);
						shuffle($mascotas);
						//echo $frases[0];
						$columnas = explode("&",$mascotas[0]);
						echo "<p>Unas de mi mascotas favoritas son:<br>";
						echo "<p>".$columnas[1]."</p>";
						echo "<img src='img/mascotas/".$columnas[0]."'>"."<br>";
						echo "</td>
					</tr>
				</table>
			</div>";

				}

			else{
				$prog='acceso.php';

				header("Location: $prog");

}

?>
</body>
</html>