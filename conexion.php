<?php

$db_host = "localhost"; 


// Nombre del host 
$db_username = "root";  

// password

$db_pass = "";  
// Nombre de la base de datos 
$db_name = "bench"; 

// comprueba la conexion

mysql_query("SET NAMES 'utf8'");
mysql_connect("$db_host","$db_username","$db_pass") or die ("no esta conectado al sevidor error de host o ussuario o password ");
mysql_query("SET NAMES 'utf8'");    //importante para que pesque los acentos ñ y caracteres  español

mysql_select_db($db_name);

?>