<?php
include("conexion.php");
   
   

	
	if (isset($_POST['hipoteca_bienes_raices'])) {
		
	$iduser = mysql_real_escape_string($_POST['iduser']);
	$tipo = mysql_real_escape_string($_POST['tipo_bienes_raices']);
	$direccion = mysql_real_escape_string($_POST['direccion_bienes_raices']);
	$comuna= mysql_real_escape_string($_POST['comuna_bienes_raices']);
	$avaluo_fiscal = mysql_real_escape_string($_POST['avaluo_fiscal_bienes_raices']);
	$rol = mysql_real_escape_string($_POST['rol_bienes_raices']);
	$hipoteca = mysql_real_escape_string($_POST['hipoteca_bienes_raices']);
	

	
	
	$sql = mysql_query("insert into bienes_raices

	set
	id_user = '$iduser',
	tipo  ='$tipo',
	direccion = '$direccion',
	comuna = '$comuna',
	avaluo_fiscal = '$avaluo_fiscal',
	rol = '$rol',
	hipoteca = '$hipoteca '
	
	
	
	");
	
	
	
?>	


<div class="uno table">
<table width="700" border="1" class="uno">
	
	<tr>
		<td><b>tipo</b></td>
		<td><b>direccion</b></td>
		<td><b>comuna</b></td>
		<td><b>avaluo_fiscal</b></td>
		<td><b>rol</b></td>
		<td><b>hipoteca</b></td>
	</tr>
	
	
	<?php
	
	$sql2 = mysql_query( "
		SELECT *
		FROM bienes_raices where id_user ='$iduser'
		") or die(mysql_error());
		
	while($row7 = mysql_fetch_array($sql2))
	{
	

	?>
	

	<tr>
	
		<td><?php echo $row7['tipo']; ?></td>
		<td><?php echo  $row7['direccion']; ?></td>
		<td><?php echo  $row7['comuna']; ?></td>
		<td><?php echo $row7['avaluo_fiscal']; ?></td>
		<td><?php echo $row7['rol']; ?></td>
	    <td><?php echo  $row7['hipoteca']; ?></td>
	</tr>
	

	
	

<?php
	}
	echo '</table>
</div>';
	}
	?>
	








