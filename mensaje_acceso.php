<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio de sesión exitoso</title>
	<script type="application/javascript">
		window.onload = function(){
			setTimeout(() => {
				location.href = "principal.php";
			}, 2000);
		}
	</script>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			background-color: #dee2e6;
		}

		h2{
			text-align:center;
			font-size: larger;
		}

		div{
			font-family:Arial, Helvetica, sans-serif;
			color: #212529;
			margin:auto;
			margin-top: 10%;
			height: 100px;
			width: 30%;
			padding-top:39px;
			background-color: #b2f2bb;
			border: 2px solid #40c057;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div>
		<h2>Has iniciado sesión con éxito</h2>
	</div>
</body>
</html>