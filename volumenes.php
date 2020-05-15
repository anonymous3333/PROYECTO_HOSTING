<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Volúmenes</title>
	<script src="js/cargaHTML.js"></script>
	<link rel="stylesheet" href="css/practicas.css">
</head>
<body>
	<div class="contenido-principal">
		<ol type="1" class="lista-opciones" id="lista_planetas">
			<li><a href="#" onclick="cargaHTML('volumenes/cubo.html');">Cubo</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cilindro.html');">Cilindro</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/cono.html');">Cono</a></li>
			<li><a href="#" onclick="cargaHTML('volumenes/prisma_rectangular.html');">Prisma Rectangular</a></li>
		</ol>
		<iframe src="volumenes/cubo.html" frameborder="0" class="contenedor" id="frame">
			
		</iframe>
	</div>
</body>
</html>