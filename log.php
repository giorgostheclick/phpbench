<?php


include("conexion.php");





 
if(!empty($_POST['rut'] ) and !empty($_POST['nombre'] 



)  and !empty($_POST['pas']))

{
	
	$rut = mysql_real_escape_string($_POST['rut']);
	$nombre = mysql_real_escape_string($_POST['nombre']);
	$apellido1 = mysql_real_escape_string($_POST['apellido1']);
	$apellido2 = mysql_real_escape_string($_POST['apellido2']);
	
	$email = mysql_real_escape_string($_POST['email']);
	$passsword = mysql_real_escape_string($_POST['pas']);
	
	$sexo = mysql_real_escape_string($_POST['sexo']);
	$dia = mysql_real_escape_string($_POST['dia']);
	$mes = mysql_real_escape_string($_POST['mes']);
	$ano = mysql_real_escape_string($_POST['ano']);
	
	
	
	
	// al crear el usuario -> creo el conyuge 
	
	
	
	
	$sql =  " 
	
	insert into usuario
	set
	rut = '$rut',
	nombre = '$nombre',
	apellido = '$apellido1',
	apellidoSeg = '$apellido2',
	email = '$email',
	contrasena = '$passsword',
	sexo = '$sexo',
	dia = '$dia',
	mes = '$mes',
	ano = '$ano' 
	
	";
	
	$result = mysql_query($sql)or die(mysql_error());
	
	
	include("dbf.php");
	
	$user = datos_personales($rut);
	
	$iduser = $user['id'];
	$rut = $user['rut'];
	
	session_start();
	 $_SESSION['rut'] =$rut;
	 $_SESSION['id']= $iduser;
	
	
	
	$sql3 = "insert into antecedentes 
	set
	idusuario = '$iduser';
	";
	
	
	$result3 = mysql_query($sql3) or die(mysql_error());
	
	$sql2 = "insert into conyuge 
	set 
	rutprincipal = '$rut',
	idprincipal = '$iduser'
	
	";
	
	
	
	$result2 = mysql_query($sql2) or die(mysql_error());
	
	
	
	
	if(!$result){
		echo "no se ";
		
	}else{
	
	echo "
		
	
		
		
	
		
		<script type='text/javascript'>

   $('#myform').each (function(){
 
  
 
  this.reset();
 

$(document).ready(function(){
	 $('#myModal').reveal();
	
	
  

   
});

	});
</script>



<meta HTTP-EQUIV='REFRESH' content='2; url=uno.php'>

	
		
	
	
	";
		
	}
	
	
	
	
}




?>