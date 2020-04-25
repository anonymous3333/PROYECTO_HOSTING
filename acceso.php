<?php session_start();

if (isset($_POST["usu"],$_POST["con"]))

{ $us=$_POST["usu"];

$contra=$_POST["con"];

if ($us=="admin" and $contra=="abc")
{ $_SESSION["usuario"]= $us;

$prog='mensaje_acceso.php';

header("Location: $prog");

}

else{

echo "Acceso no permitido. Intente de nuevo";

}

}

?>

<!DOCTYPE html>

<head>

<title>

Formulario de acceso al sistema

</title>

</head>

<body>

<div align="center">

<form name="alta" action="" method="post">

<fieldset style="width:450px; height:200px; font-size:22; background-color: #00CC00;">

<legend><font color='red'>Introduzca los datos </font></legend>

<div align="left"><br>

<label>Escriba su nombre de usuario:</label>

<input type="text" name="usu" required><br>

<p><label>Escriba su contraseña:</label>

<input type="password" name="con" required> </p><br>

</div>

<p><input type="submit" name="acceso" value="Acceder al sistema"></p>

</fieldset>

</form>

</div>

</body>

</html>