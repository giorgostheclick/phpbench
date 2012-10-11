<?php

include("conexion.php");


	
	if (isset($_POST['tipo_inversion'])) {
		
	$id_user = mysql_real_escape_string($_POST['iduser']);
	$tipo = mysql_real_escape_string($_POST['tipo_inversion']);
	$institucion = mysql_real_escape_string($_POST['institucion_inversion']);
	$valor_comercial = mysql_real_escape_string($_POST['valorcomercial_inversion']);
	$prendado = mysql_real_escape_string($_POST['prendado_inversion']);
	

	
	$sql =mysql_query("insert into ahorro_inversion

	set
	id_user = '$id_user',
	tipo  ='$tipo',
	institucion = '$institucion',
	valor_comercial = '$valor_comercial',
	prendado                =  '$prendado'");
	
	

	?>
<div class="uno table">
	<table width="300" border="1" class="">

	<tr>
		<td><b>Tipo</b></td>
		<td><b>Institucion</b></td>
		<td><b>Valor comercial</b></td>
		<td><b>Prendado</b></td>
		
	</tr>
	
	<?php

	$sql2 = mysql_query( "
		SELECT *
	   from ahorro_inversion where id_user='$id_user'
		");
	
	while($row = mysql_fetch_array($sql2))
	{
	
	?>
	<tbody>
	<tr>
		<td><?php print $row['tipo']; ?></td>
		<td><?php print $row['institucion']; ?></td>
		<td><?php print $row['valor_comercial']; ?></td>
		<td><?php print $row['prendado']; ?></td>

	</tr>
	
	</tbody>
	<?php
	}
	echo'
	</table>
	
</div>';

	}
?>
	


	
	
	
