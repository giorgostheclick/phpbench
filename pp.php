<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>



		<form  action="bienesraices.php" method="post" id="bienes">
								<div style="margin-left:20px">
										<h1>Detalles de bienes raices</h1>
								</div>
								<table width="465"  style="margin-left:20px">
										<tr>
												<th height="35" colspan="2">.</th>
										</tr>
										<tr>
												<td width="126" height="41">Tipo: </td>
												<td width="323"><input type="hidden" name="iduser" value="<?php echo $usuario['id'] ?>"/>
														<input type="text" name="tipo_bienes_raices"/></td>
										</tr>
										<tr>
												<td height="43">Direccion: </td>
												<td><input type="text" name="direccion_bienes_raices"/></td>
										</tr>
										<tr>
												<td height="43">Comuna: </td>
												<td><input type="text" name="comuna_bienes_raices"/></td>
										</tr>
										<tr>
												<td height="43">Avaluo Fiscal: </td>
												<td><input type="text" name="avaluo_fiscal_bienes_raices"/></td>
										</tr>
										<tr>
												<td>Rol: </td>
												<td><input type="text" name="rol_bienes_raices"/></td>
										</tr>
										<tr>
												<td height="38">Hipotecado:</td>
												<td> Si
														<input type="radio"  name="hipoteca_bienes_raices" value="si"  checked="checked"/>
														No
														<input type="radio" name="hipoteca_bienes_raices" value="no"/></td>
										</tr>
										<tr>
												<td colspan="2"><input type="submit" name="Enviar" value="Agregar"/></td>
										</tr>
								</table>
						</form>
						
						<!--- div  bienes---->
						
						<div id="bienesdiv">
								<?php 
	 $user = $usuario['id'];
	 $iduser = $user;
	 echo  $usuario['id'];
	 
	 
	
	
	?>
								<?php include("bienesraices.php"); ?>
								<div class="uno table">
										<table width="700" border="1" >
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
												<tbody>
														<tr>
																<td><?php echo $row7['tipo']; ?></td>
																<td><?php echo  $row7['direccion']; ?></td>
																<td><?php echo  $row7['comuna']; ?></td>
																<td><?php echo $row7['avaluo_fiscal']; ?></td>
																<td><?php echo $row7['rol']; ?></td>
																<td><?php echo  $row7['hipoteca']; ?></td>
														</tr>
												</tbody>
												<?php
	}
	?>
										</table>
								</div>
						</div>
						<!--- div  bienes---->
						
						<div class="espace2"></div>
						<div style="margin-left:20px">
								<h1>Detalle Ahorro e Inversion.</h1>
						</div>
						<form  id="ahorro" action="ahorro.php" method="post">
								<table border="0" class="tabla1" table width="489"  style="margin-left:20px">
										<tr>
												<th height="27" colspan="2"> <?php echo $usuario['id'];
				$user = $usuario['id'];
				 ?> </th>
										</tr>
										<tr>
												<td width="127" height="43">Tipo:</td>
												<td width="352"><input type="hidden" name="iduser" value="<?php echo $usuario['id'] ?>"/>
														<input type="text" name="tipo_inversion"/></td>
										</tr>
										<tr>
												<td height="41">Instituci&oacute;n:</td>
												<td><input type="text" name="institucion_inversion"></td>
										</tr>
										<tr>
												<td height="42">Valor comercial:</td>
												<td><input type="text" name="valorcomercial_inversion"/></td>
										</tr>
										<tr>
												<td height="29">Prendado:</td>
												<td> Si
														<input type="radio" name="prendado_inversion" value="si" checked="checked"/>
														No
														<input type="radio" name="prendado_inversion" value="no"/></td>
										</tr>
										<tr>
												<td>Reservado Banco:</td>
												<td><input type="text" name="reservadobanco_inversion"></td>
										</tr>
										<tr>
												<td colspan="2"><input type="submit" name="enviar" value="Agregar"></td>
										</tr>
								</table>
						</form>
						<div id="divahorro">
								<?php include("ahorro.php"); ?>
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
	   from ahorro_inversion where id_user='$user'
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
	
?>
										</table>
								</div>
						</div>
	
	

</body>
</html>