<?php

session_start();

// Destruye todas las variables de la sesion

session_unset();

// Finalmente, destruye la sesion

session_destroy();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>logout</title>
	<script type="application/javascript">
		window.onload = function(){
			setTimeout(() => {
				location.href = "acceso.php";
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
			background-color: #ffc9c9;
			border: 2px solid #fa5252;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div>
		<h2>The session has been closed successfully</h2>
	</div>
</body>
</html>