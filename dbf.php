<?php

include("conexion.php");

function datos_personales ($rut){
	
	$sql = ("select * from usuario where rut = '$rut' limit 1 ");
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row;
	
	
	
	
	
	
}

function datos_conyugue ($rut){


	$sql = ("select * from conyuge where rutprincipal = '$rut' limit 1");
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row;
	
	
	
}


function laboral($iduser){
	
	$sql = ("select * from antecedentes where idusuario = '$iduser' limit 1");
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row;
	
}



?>