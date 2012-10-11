<?php




include("conexion.php");



if(isset($_POST['rut'])){
	
	
	// $id = mysql_real_escape_string($_POST['id']);
	 $idusuario = ($_POST['iduser']);
	 $rutprin = mysql_real_escape_string($_POST['rutprin']);
	 $rut = mysql_real_escape_string($_POST['rutprin']);
	 $nombre = mysql_real_escape_string($_POST['nombre']);
	 $apellido1 = mysql_real_escape_string($_POST['apellido1']);
	 $apellido2 = mysql_real_escape_string($_POST['apellido2']);
	
	 $dia = mysql_real_escape_string($_POST['dia']);
     $mes = mysql_real_escape_string($_POST['mes']);
	 $ano = mysql_real_escape_string($_POST['ano']);
	 $telefono = mysql_real_escape_string($_POST['telefono']);
	 $educacion = mysql_real_escape_string($_POST['educacion']);
	 $nacionalidad = mysql_real_escape_string($_POST['nacionalidad']);
	 $profesion = mysql_real_escape_string($_POST['profesion']);
	 $universidad = mysql_real_escape_string($_POST['universidad']);
	 $actividad = mysql_real_escape_string($_POST['actividad']);
	 $cargo = mysql_real_escape_string($_POST['cargo']);
	 $antiguedad = mysql_real_escape_string($_POST['antiguedad']);
	 $renta = mysql_real_escape_string($_POST['renta']);
	 $empresa = mysql_real_escape_string($_POST['empresa']);
	 
	echo  $idusuario;
	
	
	//  $email = mysql_real_escape_string($_POST['email']);
	//  $passsword = mysql_real_escape_string($_POST['pas']);
	
 // $sexo = mysql_real_escape_string($_POST['sexo']);
	
	
	
	$sql =("update conyuge set
	
	rut = '$rut',
	dia = '$dia',
	mes = '$mes',
	ano = '$ano',
	telefono = '$telefono',
	nombre = '$nombre',
	apellido1 = '$apellido1',
	apellido2  = '$apellido2',
    educacion  = '$educacion',
	nacionalidad  = '$nacionalidad',
	profesion  = '$profesion',
	universidad  = '$universidad',
	cargoactual = '$universidad',
	antiguedad = '$antiguedad',
	renta = '$renta',
	empresa = '$empresa'
	where  idprincipal = '$idusuario'") or die(mysql_error());
	
	
	$result =  mysql_query($sql);
	
	if(!$result){
		
		echo "noooo";
		
	}else{
		
		
		echo "
	<script>
	
	
	alert('Tus datos an sido actualizados');

	</script>
	
  
		
		";
		
	}

	
	
}


?>