<?php
if(isset($_SESSION["frase"],$_SESSION["autor"])):
	$frase = $_SESSION["frase"];
	$autor = $_SESSION["autor"];
?>
<div>
	<table style="background-color:#fcc419;">
		<tr>
			<td style="border: 1px solid #868e96;">
			<q class='frase'><?=$frase;?></q> - <i class='autor'><?=$autor;?></i>
			</td>
		</tr>
	</table>
</div>
<?php endif;?>