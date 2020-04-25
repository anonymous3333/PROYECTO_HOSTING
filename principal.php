<?php

session_start();

if (isset($_SESSION["usuario"]))

{ $usuario=$_SESSION["usuario"];

//Estilos para los bordes de tablas

?>

<!DOCTYPE html>

<html>

<head>

<style>

.tabla1{

border: 1px solid red;

border-collapse: collapse;

padding: 15px;

}

.celda1_t1{ width:40%;

text-align: center;

color: red;

border: 1px solid black;

padding: 15px;

}

#tabla2{

color:green;

background-color: #f2f2f2;

border: 1px solid black;

border-collapse: collapse;

padding: 10px;

width: 100%;

}

.tabla3{

color:green;

background-color: white;

border: 1px solid black;

border-collapse: collapse;

padding: 10px;

width: 100%;

}

.celda1_t3{ width:40%;

text-align: left;

border: 0px;

}

.celda2_t3{ width: 60%;

text-align: right;

border: 0px;

}

</style>

<body>

<?php

echo "<div align='right'>Usuario: $usuario <a href='cerrar_sesion.php'>Cerrar sesión</a></div><br><br>";

echo "<div align='center'><table class='tabla1'><tr><td class='celda1_t1'>BIENVENIDOS A MI PAGINA PRINCIPAL</td></tr></table></div><br><br>";

echo "<div class='tabla2'>LA FRASE DEL DIA ES: </div>";

echo "<br><br><div><table class='tabla3'><tr><td class='celda1_t3'>IMAGEN 1 </td><td class='celda2_t3'>IMAGEN 2 </td></tr></table></div>";

}

else

{ $prog='acceso.php';

header("Location: $prog");

}

?>