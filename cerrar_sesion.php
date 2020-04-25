<?php

session_start();

// Destruye todas las variables de la sesion

session_unset();

// Finalmente, destruye la sesion

session_destroy();

?>

<script type=text/javascript>

alert("Ha cerrado sesión correctamente");

</script>

<a href="acceso.php">Clic aquí para continuar</a>