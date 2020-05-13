<?php
	//Selecciona una línea aleatoria de un archivo de texto
	function lineaAleatoria($nombreArchivo){
		$temp = file($nombreArchivo);
		shuffle($temp);
		return explode("&",$temp[0]);
	}
?>