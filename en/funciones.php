<?php
	//Selecciona una línea aleatoria de un archivo de texto
	function lineaAleatoria($nombreArchivo){
		$temp = file($nombreArchivo);
		shuffle($temp);
		return explode("&",$temp[0]);
	}

	function leerFrases(){
		$linea = rand(0,30);
		$archivo1 = file("../txt/frases.txt");
		$archivo2 = file("txt/frases.txt");
		$frases = array(
			"es" => explode("&",$archivo1[$linea]),
			"en" => explode("&",$archivo2[$linea])
		);
		return $frases;
	}

	function diaDeLaSemana(){
		$fecha = getdate();
		switch($fecha["wday"]){
			case 0:
				$diasemana="Happy Sunday - Day of Sun !";
				break;
				case 1:
				$diasemana="Happy Monday - Day of Moon !";
				break;
				case 2:
				$diasemana="Happy Tuesday - Day of Mars !";
				break;
				case 3:
				$diasemana="Happy Wednesday - Day of Mercury !";
				break;
				case 4:
				$diasemana="Happy Thursday - Day of Jupiter !";
				break;
				case 5:
				$diasemana="Happy Friday - Day of Venus !";
				break;
				case 6:
				$diasemana="Happy Saturday - Day of Saturn !";
				break;
		}
		return $diasemana;
	}
?>