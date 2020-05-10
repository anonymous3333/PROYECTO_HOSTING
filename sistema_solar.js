var planetas = ["mercurio","venus","tierra","marte","jupiter","saturno","urano","neptuno"];

function cargaHTML(clave){
	var contenedor = document.getElementById("frame");
	contenedor.src = "planetas/"+planetas[clave]+".html";
}