<?php

session_start();

if (isset($_SESSION["usuario"]))

{ $usuario=$_SESSION["usuario"];

print ("Bienvenido $usuario al contenido restringido de mi p&aacute;gina<br><br>");

print ("<a href='principal.php'>Clic aqui para continuar...</a>");

}

else

{ $prog='acceso.php';

header("Location: $prog");

}

?>