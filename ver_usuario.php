<?php

include("conexion.php");



if(isset ($_POST['rut'])){
	
$rut = $_POST['rut'];
$contrasena = $_POST['contrasena'];

	
$query =("select * from usuario where rut ='$rut'  and contrasena = '$contrasena' limit 1");

$result = mysql_query($query);

$cont1 = mysql_num_rows($result);

if($cont1 == 1){
	
	session_start();
     
	 $_SESSION["rut"] = $rut;
	 
	
	echo "
	
<meta HTTP-EQUIV='REFRESH' content='1; url=uno.php'>

	
	";
	
	
	
}else{
	
	echo "
	
	
	<br>
	<h1> No existe el usuario </h1>
	
	 ";
	
	
}

}

?>