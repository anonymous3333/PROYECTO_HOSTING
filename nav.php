<script src="js/global.js"></script>
<link rel="stylesheet" href="css/nav.css">
<div>
	<table class="bar_nav">
		<tr>
			<td>
				<p><span id="fecha"><span></p>
				<p><span id="hora"></span> hrs.</p>
			</td>
			<td>
				<!-- Imprime el número de visitantes -->
				<p>Número de visitante:
					<?=$n_visitante;?>
				</p>
			</td>
			<td class="contenedor-dia-semana">
				<?=diaDeLaSemana();?>
			</td>
			<td>
				<p>Cambiar idioma:</p>
				<img src="img/lang/eng.gif" alt="Inglés" height="25px" onclick="traducirEN();">
				<img src="img/lang/es.gif" alt="Español" height="25px">
			</td>
			<td>
				<p>Usuario actual:</p>
				<p><?=$usuario;?></p>
				<a href='cerrar_sesion.php'>Cerrar sesión</a>
			</td>
		</tr>
	</table>
</div>