//Si el número es de un sólo dígito agrega un cero al principio
function formateaNumero(numero){
	if(numero<10)
		numero= "0"+numero;
		return numero;
}

function obtenerHora() {
	var fecha = new Date();
	document.getElementById("fecha").textContent =
	formateaNumero(fecha.getDate()) + "-" + formateaNumero(fecha.getMonth()+1) + "-" + formateaNumero(fecha.getFullYear());
	document.getElementById("hora").textContent =
	formateaNumero(fecha.getHours())+":"+formateaNumero(fecha.getMinutes())+":"+formateaNumero(fecha.getSeconds());
}

function actualizarReloj() {
	setInterval(obtenerHora, 1000);
}

function deshabilitarRetroceso(){
    history.pushState(null, null, location.href);
	history.back();
	history.forward();
	window.onpopstate = function () { history.go(1); };
}

window.onload = function(){
	actualizarReloj();
	deshabilitarRetroceso();
}

