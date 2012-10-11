
<?php


include("conexion.php");

	



	if (isset($_POST['iduser'])) {
		
			$tipo = mysql_real_escape_string($_POST['tipo_detalle_deuda']);
	$iduser =mysql_real_escape_string($_POST['iduser']);
	$institucion = mysql_real_escape_string($_POST['institucion_detalle_deuda']);
	$pago_mensual = mysql_real_escape_string($_POST['pago_mensual_deuda']);
	$deuda_total = mysql_real_escape_string($_POST['deuda_total']);
	$vencimiento_final = mysql_real_escape_string($_POST['venciomiento_final_deuda']);
	$deuda_vigente = mysql_real_escape_string($_POST['deuda_vigente_final']);
	


$sql = mysql_query("insert into deudas 
     set
	id_user  = '$iduser',
	tipo  = '$tipo',
	institucion  = '$institucion',
	pago_mensual = '$pago_mensual',
    deuda_total  =  '$deuda_total',
	vencimiento = '$vencimiento_final',
	vigente = '$deuda_vigente'
	
	
	") or die(mysql_error());
	
	
	
	?>
	
	
	
	<div class="uno table">
	<table width="300" border="1" class="">

	<tr>
		<td><b>Tipo</b></td>
		<td><b>Institucion</b></td>
		<td><b>Pago mensual</b></td>
		<td><b>Deuda total</b></td>
	    <td><b>Vencimiento</b></td>
		<td><b>Vigente</b></td>
		
	</tr>
	
	<?php

	$sql2 = mysql_query( "
		SELECT *
	   from deudas where id_user='$iduser'
		") or die(mysql_error());
	
	while($row = mysql_fetch_array($sql2))
	{
	
	?>
	<tbody>
	<tr>
		<td><?php print $row['tipo']; ?></td>
		<td><?php print $row['institucion']; ?></td>
		<td><?php print $row['pago_mensual']; ?></td>
		<td><?php print $row['deuda_total']; ?></td>
		<td><?php print $row['vencimiento']; ?></td>
		<td><?php print $row['vigente']; ?></td>


	</tr>
	
	</tbody>
	<?php
	}
	
	echo '</table>
	
</div>';
	}
$pp =1;
?>
	

