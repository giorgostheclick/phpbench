<?php
include("conexion.php");
$iduser = 3;
$sqlcuenta = mysql_query("Select * from bienes_raices where id_user='$iduser'");

	$contador = mysql_num_rows($sqlcuenta);
	echo $contador;
?>