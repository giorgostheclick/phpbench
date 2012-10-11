<?php




include("conexion.php");



if(isset($_POST['rutprin'])){
	
	
	// $id = mysql_real_escape_string($_POST['id']);
	 $idusuario = ($_POST['iduser']);
	 $rutprin = mysql_real_escape_string($_POST['rutprin']);
	$laboral = mysql_real_escape_string($_POST['laboral']);
	
	$empleador = mysql_real_escape_string($_POST['empleador']);
	$actividad = mysql_real_escape_string($_POST['actividad']);
	
	
	$calle = mysql_real_escape_string($_POST['calle']);
	$numero = mysql_real_escape_string($_POST['numero']);
	
	$tipoLugar = mysql_real_escape_string($_POST['tipoLugar']);
	
	$ciudad = mysql_real_escape_string($_POST['ciudad']);
	$comuna = mysql_real_escape_string($_POST['comuna']);
	$region = mysql_real_escape_string($_POST['region']);
	$telefono = mysql_real_escape_string($_POST['telefono']);
	
	$celular = mysql_real_escape_string($_POST['celular']);
	$email = mysql_real_escape_string($_POST['email']);
    $giro = mysql_real_escape_string($_POST['giro']);
	 $fecha_ingreso = mysql_real_escape_string($_POST['fecha_ingreso']);
	 $cargo_actual = mysql_real_escape_string($_POST['cargo_actual']);
	 $giro_empresa_anterior = mysql_real_escape_string($_POST['giro_empresa_anterior']);
	 $antiguedad = mysql_real_escape_string($_POST['antiguedad']);
	 $finiquito = mysql_real_escape_string($_POST['finiquito']);

	
	
	//  $email = mysql_real_escape_string($_POST['email']);
	//  $passsword = mysql_real_escape_string($_POST['pas']);
	
 // $sexo = mysql_real_escape_string($_POST['sexo']);
	
	
	
	$sql =("update antecedentes set
	
	rutuser = '$rutprin',
    situacion_laboral = '$laboral',
	Empleador_Empresa = '$empleador',
	
	tipo_actividad = '$actividad',
	
	calle = '$calle',
	numero = '$numero',
	
	tipo_domicilio = '$tipoLugar',
	ciudad = '$ciudad ',
	comuna = '$comuna',
	
	telefono = '$telefono',
	celular = '$celular',
	correo = '$email',
	fecha_ingreso = '$fecha_ingreso',
	cargo_actual = '$cargo_actual',
	nombre_empleador_anterior = '$giro_empresa_anterior',
	antiguedad_empleador_anterior = '$antiguedad',
	fecha_finiquito = '$finiquito'
	where  idusuario= '$idusuario'");
	
	
	$result =  mysql_query($sql)or die(mysql_error());
	
	if(!$result){
		
		
		
	}else{
		
		
		echo "
	<script>
	
	
	alert('Tus datos an sido actualizados');
	
	

	</script>
	
  
		
		";
		
	}

	
	
}


?>