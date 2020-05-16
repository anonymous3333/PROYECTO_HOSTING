<?php
	//Selecciona una línea aleatoria de un archivo de texto
	function lineaAleatoria($nombreArchivo){
		$temp = file($nombreArchivo);
		shuffle($temp);
		return explode("&",$temp[0]);
	}

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
?>