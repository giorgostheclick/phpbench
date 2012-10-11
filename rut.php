<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./js/jq.js"> </script>
<script type="text/javascript" src="./js/jquery.Rut.js"> </script>
<script type="text/javascript" src="./js/jquery.Rut.min.js"> </script>
<script type="text/javascript"> 
	$(document).ready(function(){	




// Demo 1
$('#rut_demo_1').Rut({ 
  on_error: function(){ alert('Rut incorrecto'); } 
});
// Demo 3
$('#rut_demo_3, #rut_demo_4').Rut({
  on_error: function(){ alert('Rut incorrecto'); }, 
  on_success: function(){ alert('Rut correcto') } 
});
// Demo 5
$('#rut_demo_5').Rut({
  on_error: function(){ alert('Rut incorrecto'); },
  format_on: 'keyup' 
});
// Demo 6
$('#rut_demo_6').Rut({
  validation: false,
  format_on: 'keyup',
  digito_verificador: '#digito_verificador_demo_6' 
});

$('#rut_demo_7').Rut({
  digito_verificador: '#digito_verificador_demo_7',
  on_error: function(){ alert('Rut incorrecto'); }
});

$("#content > ul").tabs();
});




</script>



<body>

<input type="text" id="rut_demo_5" name="rut_demo_5" />

</body>
</html>