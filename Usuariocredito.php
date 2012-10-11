<?php




include("conexion.php");
if(isset($_POST['id'])){
	
	 $id = mysql_real_escape_string($_POST['id']);

	 $credito = mysql_real_escape_string($_POST['credito']);
	 
	 $monto = mysql_real_escape_string($_POST['monto']);
	 
	 $plazo = mysql_real_escape_string($_POST['plazo']);
	 
	
	$sql = mysql_query("update usuario set
	
	credito  = '$credito',
	monto  = '$monto',
	plazo  = '$plazo'

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