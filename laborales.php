<?php




include("conexion.php");



if(isset($_POST['iduser'])){
	
	
	// $id = mysql_real_escape_string($_POST['id']);
	 $idusuario = ($_POST['iduser']);
	 $rutprin = mysql_real_escape_string($_POST['rutuser']);
	 $situacion_laboral = mysql_real_escape_string($_POST['situacion_laboral']);
	 $Empleador_Empresa = mysql_real_escape_string($_POST['Empleador_Empresa']);
	 $tipo_actividad = mysql_real_escape_string($_POST['tipo_actividad']);
	 $calle = mysql_real_escape_string($_POST['calle']);
	
	
	
	 
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
	sadsdaasd
	<script type='text/javascript'>

  
 

$(document).ready(function(){
	 $('#myModal2').reveal();
	
  

   
});


</script>
		

		
		";
		
	}

	
	
}


?>