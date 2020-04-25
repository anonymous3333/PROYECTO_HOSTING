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

			echo "<br><br><div><table class='tabla3'><tr><td class='celda1_t3'>IMAGEN 1 </td><td class='celda2_t3'>IMAGEN 2 </td></tr></table></div>";

				}

			else{
				$prog='acceso.php';

				header("Location: $prog");

}

?>
</body>
</html>