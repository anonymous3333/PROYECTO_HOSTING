function obtenerVolumenCubo(){
	var arista = parseFloat(document.getElementById("arista").value);
	if(isNaN(arista))
		alert("Datos de entrada no válidos.");
	else{
		document.getElementById("resultado").value = (arista*arista).toFixed(2);
	}
}

function obtenerVolumenCilindro(){
	var radio = parseFloat(document.getElementById("radio").value);
	var altura = parseFloat(document.getElementById("altura").value);
	if(isNaN(radio) || isNaN(altura))
		alert("Datos de entrada no válidos.");
	else{
		document.getElementById("resultado").value = ((Math.PI*radio*radio)*altura).toFixed(2);
	}
}

function obtenerVolumenCono(){
	var radio = parseFloat(document.getElementById("radio").value);
	var altura = parseFloat(document.getElementById("altura").value);
	if(isNaN(radio) || isNaN(altura))
		alert("Datos de entrada no válidos.");
	else{
		document.getElementById("resultado").value = ((1/3)*(Math.PI*radio*radio)*altura).toFixed(2);
	}
}

function obtenerVolumenPrismaR(){
	var arista1 = parseFloat(document.getElementById("arista1").value);
	var arista2 = parseFloat(document.getElementById("arista2").value);
	var arista3 = parseFloat(document.getElementById("arista3").value);
	if(isNaN(arista1) || isNaN(arista2) || isNaN(arista3))
		alert("Datos de entrada no válidos.");
	else{
		document.getElementById("resultado").value = (arista1*arista2*arista3).toFixed(2);
	}
}