<?php session_start();

if (isset($_POST["usu"],$_POST["con"]))
{
	$us=$_POST["usu"];

	$contra=$_POST["con"];

	if (($us=="admin" and $contra=="abc") or ($us=="invitado" and $contra="12345"))
	{
		$_SESSION["usuario"]= $us;
		$archivo_visitantes = "visitantes.txt";
		$f = fopen($archivo_visitantes, "r"); 
		if($f)
		{
			$visitantes = fread($f, filesize($archivo_visitantes));
			++$visitantes;
			$_SESSION["visitantes"] =$visitantes;
			//echo $visitantes;
			fclose($f);
		}
		$f = fopen($archivo_visitantes, "w+");
		if($f)
		{
			fwrite($f, $visitantes);
			fclose($f);
		}

		$prog='mensaje_acceso.php';

		header("Location: $prog");

	}
	else{
		echo "Acceso no permitido. Intente de nuevo";
	}

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acceso al sistema</title>
	<link rel="stylesheet" href="estilos_acceso.css">
</head>
<body>

		<form name="alta" method="post" class="form">

		<fieldset class="grupo_form">

			<legend>Introduzca los datos</legend>

				<!-- <label>Escriba su nombre de usuario:</label> -->

				<div align="center" >
				<input type="text" name="usu" placeholder="Usuario" class="textbox" required>
				</div>


				<!-- <label>Escriba su contraseña:</label> -->

				<div align="center" >
				<input type="password" name="con" placeholder="Constraseña" class="textbox" required>
				</div>


				<div align="center">
				<input type="submit" name="acceso" value="Iniciar Sesión">
				</div>

		</fieldset>

	</form>
</body>
</html>