<?php
	require ('funciones.php');
	session_start();
	if(!isset($_SESSION["usuario"])):
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Access</title>
	<link rel="stylesheet" href="../css/acceso.css">
</head>
<body>

	<form name="alta" method="post" class="form">

		<legend>Access</legend>
		<div align="center" >
		<input type="text" name="usu" placeholder="User" class="textbox" required>
		</div>

		<div align="center" >
		<input type="password" name="con" placeholder="Password" class="textbox" required>
		</div>
		<div align="center">
		<input type="submit" name="acceso" value="Login" class="button">
		</div>
	</form>
	<?php
		if (isset($_POST["usu"],$_POST["con"])){
			$us=$_POST["usu"];
			$contra=$_POST["con"];				
			if (($us=="admin" and $contra=="abc") or ($us=="invitado" and $contra="12345")){
			
				$_SESSION["usuario"]= $us;
				$informacion_frases = leerFrases();
				$_SESSION["frase-ES"]=$informacion_frases["es"][0];
				$_SESSION["frase-EN"]=$informacion_frases["en"][0];
				$_SESSION["autor"]=$informacion_frases["es"][1];
				$archivo_visitantes = "../txt/visitantes.txt";
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
			}else
				echo "<div style='margin-top:2%'><p style='color:#e03131;text-align:center;'>No se reconoce el usuario o la contraseña.<br>Intente otra vez.</p></div>";
		}
		?>
</body>
</html>
<?php
	else:
		$prog='principal.php';
		header("Location: $prog");
	endif;
?>