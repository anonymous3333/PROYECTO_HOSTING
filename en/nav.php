<script src="../js/global.js"></script>
<link rel="stylesheet" href="../css/nav.css">
<div>
	<table class="bar_nav">
		<tr>
			<td>
				<p><span id="fecha"><span></p>
				<p><span id="hora"></span> hrs.</p>
			</td>
			<td>
				<!-- Imprime el número de visitantes -->
				<p>Visitor number:
					<?=$n_visitante;?>
				</p>
			</td>
			<td class="contenedor-dia-semana">
				<?=diaDeLaSemana();?>
			</td>
			<td>
				<p>Change language:</p>
				<img src="../img/lang/eng.gif" alt="Inglés" height="25px">
				<img src="../img/lang/es.gif" alt="Español" height="25px" onclick="traducirES();">
			</td>
			<td>
				<p>Current user:</p>
				<p><?=$usuario;?></p>
				<a href='cerrar_sesion.php'>Logout</a>
			</td>
		</tr>
	</table>
</div>