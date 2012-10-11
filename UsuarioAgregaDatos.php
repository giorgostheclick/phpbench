<?php




include("conexion.php");
if(isset($_POST['rut'])){
	
	 $id = mysql_real_escape_string($_POST['id']);
	 $rut = mysql_real_escape_string($_POST['rut']);
	 $nombre = mysql_real_escape_string($_POST['nombre']);
	 $apellido1 = mysql_real_escape_string($_POST['apellido1']);
	 $apellido2 = mysql_real_escape_string($_POST['apellido2']);
	
	//  $email = mysql_real_escape_string($_POST['email']);
	//  $passsword = mysql_real_escape_string($_POST['pas']);
	
 $sexo = mysql_real_escape_string($_POST['sexo']);
	//  $dia = mysql_real_escape_string($_POST['dia']);
	//  $mes = mysql_real_escape_string($_POST['mes']);
	//  $ano = mysql_real_escape_string($_POST['ano']);
	
	$estadociv = mysql_real_escape_string($_POST['estadociv']);
	 $niveleducacion = mysql_real_escape_string($_POST['niveleducacion']);
	 $tipocasa = mysql_real_escape_string($_POST['tipocasa']);
	 $ndependientes = mysql_real_escape_string($_POST['ndependientes']);
	 $profesion = mysql_real_escape_string($_POST['profesion']);
	 $universidad = mysql_real_escape_string($_POST['universidad']);
	$actividad = mysql_real_escape_string($_POST['actividad']);
	 $direccion = mysql_real_escape_string($_POST['direccion']);
	 $comuna = mysql_real_escape_string($_POST['comuna']);
	 $region =  mysql_real_escape_string($_POST['region']);
	 $telefono1 = mysql_real_escape_string($_POST['telefono1']);
	 $telefono2 = mysql_real_escape_string($_POST['telefono2']);
	
	$sql = mysql_query("update usuario set
	nombre  = '$nombre',
	apellido = '$apellido1',
	apellidoSeg = '$apellido2',
    sexo = '$sexo',
	estadociv  = '$estadociv',
	niveleducacion = '$niveleducacion',
	tipocasa = '$tipocasa',
	ndependientes = '$ndependientes',
	profesion = '$profesion',
	universidad = '$universidad',
	actividad = '$actividad',
	direccion = '$direccion',
	comuna = '$comuna',
	region = '$region',
	telefono1 = '$telefono1',
	telefono2 = '$telefono2'
	where  id = '$id'
	
	") or die(mysql_error());
	
	
	$result = $sql;
	
	if(!$result){
		
		echo "noooo";
		
	}else{
		
		
		echo "
		<script>
	
	alert('Sus datos an sido actualizados');
	
	</script>
		";
		
	}

	
	
}


?>