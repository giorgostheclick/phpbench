<!DOCTYPE html>



<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
  <title>demo v1</title>

<!-- css//-->
<link rel="shortcut icon" href="favicon.ico"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="css/noscript.css" rel="stylesheet" type="text/css" media="screen,all" id="noscript" />


 <link rel="stylesheet" href="cssform/960.css" />
        <link rel="stylesheet" href="cssform/icons.css">
        <link rel="stylesheet" href="cssform/tipsy.css">
        <link rel="stylesheet" href="cssform/formalize.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="cssform/jquery-ui-1.8.18.custom.css">
        <link rel="stylesheet" href="cssform/chosen.css">
        <link rel="stylesheet" href="cssform/ui.spinner.css">
        <link rel="stylesheet" href="cssform/jquery.jqplot.min.css" />
        <link rel="stylesheet" href="cssform/fullcalendar.css" />
        <link rel="stylesheet" href="cssform/jquery.miniColors.css" />
        <link rel="stylesheet" href="cssform/elrte.min.css" />
        <link rel="stylesheet" href="cssform/elfinder.css" />
        <link rel="stylesheet" href="cssform/main.css" />
	

		


<!-- Javascript  //-->
<!-- 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/jquery.tools.tabs.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.html"></script>
<script type="text/javascript" src="js/functions.js"></script>
-->


<!-- jquery ui -->


		
		
		

		


	<script type='text/javascript' src='js/jquery-1.8.2.min.js'></script>


		
<!-- FORM CHECK -->



  <script type="text/javascript" src="./js/jquery.form.js"></script>
<script type="text/javascript" src="./js/jq.js"> </script>

<script type="text/javascript" src="./js/jquery.Rut.js"> </script>
<script type="text/javascript" src="./js/jquery.Rut.min.js"> </script>
<script src="val-js/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="val-js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	
	
<script src="js/mensaje.js" type="text/javascript" charset="utf-8"></script> 
	


<!-- INICIANDO FORMULARIO A CHEKIAR CON EL ID -->


<!-- formulario despues de registrarse  -->
 <script type="text/javascript">
  $(document).ready(function() {
    $('#myform').ajaxForm({
      target: '#guardar',
      success: function() {
        $('#guardar').fadeIn('slow');
      }
    });
  });
  </script>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('#formingreso').ajaxForm({
      target: '#log',
      success: function() {
        $('#log').fadeIn('slow');
      }
    });
  });
  </script>
  
  
  
  

<script type="text/javascript"> 
	$(document).ready(function(){	

// Demo 1
$('#rut_demo_1').Rut({ 
  on_error: function(){ alert('Rut incorrecto'); } 
});
// Demo 3
$('#rut_demo_3, #rut_demo_4').Rut({
  format_on: 'keyup',
  on_error: function(){ alert('Rut incorrecto'); },
  on_success: function(){ alert('Rut correcto'); } 
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







<link rel="stylesheet" href="cssval/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="cssval/template.css" type="text/css"/>



	


	





<!-- funcion para validar rut con -->




	  	




<!-- FIN FORM CHECK --->


<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/fonts/TitilliumText14L_400.font.js"></script>
<!-- cufon //-->
<script type="text/javascript">
  Cufon.replace('h1')('h2')('h3')('h4')('h5')('#myslidemenu a',{hover: 'true'})('#myslidemenu li li a',{hover: 'true'})('a.button', {hover: 'true'})('.nivo-caption p')('.heading-block span')('.heading-block-footer span');
</script>




<script type="text/javascript" src="js/jquery.reveal.js"></script>
<link rel="stylesheet" href="js/reveal.css">	








</head>

<body>


<div class="espace2"></div>
<div class="contenedor">






  <div id="topbar"></div>
  
  <div class="contenido">
  
  
  
		
		
  <!-- Head -->    
  
  
    <div id="header">
      
      <!-- Logo -->
      <div id="logo">
        <a href="index-2.html"><img src="images/logo.png" alt="" /></a>
      </div>
      <!-- Logo fin  -->
    
      <!-- Menu con plugin jqueryslidemenu -->
      <div id="menu">
        <div id="myslidemenu" class="jqueryslidemenu">
          <ul>
            <li><a href="index.html"  >Home</a>
              
            </li>
            <li><a href="#" class="selected">Registrate</a></li>
            <li><a href="#" class="big-link" data-reveal-id="myModal2" data-animation="fade">Ingresa</a></li>
            
    
          </ul>
        </div>
      </div>
    </div>
  <!-- Fin meno -->
  
  <div class="clear"></div>
  
  <!-- Slogan -->
  <div class="slogan">
    <h3> Bench Banking <span>Cotiza </span><span>Compara</span>  <span>Contrata</span></h3>
              
  </div>
  <!-- Fin slogan-->
  
  

  



  <div class="heading-block"><span>Ingresa tus datos personales</span></div>



<form name="myform" id="myform" class="myform" method="post" action="log.php"  />	
<table width="810" border="1" >


	
		<tr>
		<td>Nombre</td>
		<td>Primer Apellido</td>
		<td>Segundo Apellido</td>
		
		</tr>
		
		<tr >
			
				
	         <td width="267">  <input type="text" data-validation-engine="validate[required]" style="width:250px;"  name="nombre"  /></td>
                                  
				<td width="267">  <input type="text" data-validation-engine="validate[required]"  style="width:250px;" name="apellido1"   /></td>
				<td width="249"> <input type="text" id="pass-input-normal" style="width:250px;"  data-validation-engine="validate[required]"  name="apellido2"   /></td>
				
				
		
				
		</tr >
</table >

		

<div class="espace"></div>

<table width="930" border="1">
		
		<tr>
		<td>Rut (usuario)</td>
		<td>Genéro</td>
		<td>Fecha de Nacimiento </td>
		
		</tr>
		
		<tr>
				<td width="298">


<input type="text" id="rut_demo_3" name="rut"  data-validation-engine="validate[required]"  style="width:250px;"  />

</td>
				<td width="303">    <select name="sexo" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"  >
                                       
                                               <option value="">Opcion</option>
                                                <option value="femenino" >Femenino</option>
												
												  <option value="masculino">Masculinos</option>
                                            </select></td>
				<td width="307">   <select class="chosen" style="width:50px;" name="dia"  data-validation-engine="validate[required]">
                                               
 <option selected="selected" value=""></option>
<option  value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
                                            </select>
											
											
											<select class="chosen" style="width:90px" name="mes">
                                               <option value="1">enero</option>
<option value="2">febrero</option>
<option value="3">marzo</option>
<option value="4">abril</option>
<option value="5">mayo</option>
<option value="6">junio</option>
<option value="7">julio</option>
<option value="8">agosto</option>
<option value="9">septiembre</option>
<option selected="selected" value="10">octubre</option>
<option value="11">noviembre</option>
<option value="12">diciembre</option>
                                            </select>
											
											
											
											<select class="" end_year="1912" id="user_profile_attributes_date_birth_1i" name="ano" order="day month year" start_year="2002" style="width:100px">
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
</select>
											
		
		
											</td>
		</tr>
</table>





<div class="espace"></div>
			
						<table width="534">
						<tr>
						
						<td> Email </td>
						<td>Confima tu mail</td>
						
						</tr>
						
						<tr>
						<td>   <input  type="text"  style="width:250px;"  id="mail1" data-validation-engine="validate[required,custom[email]]"  data-errormessage-value-missing="Debe ingresar un email"   data-errormessage-custom-error="Email invalido" /></td>
						
						<td>   <input  type="text" id="pass-input-normal" style="width:250px;" data-validation-engine="validate[required,custom[email],equals[mail1]]]"  
						
						
				data-errormessage-value-missing="Debe ingresar un email"   data-errormessage-custom-error="Email invalido"
    data-errormessage="El correo no coincide con el anterior."
						
						name="email"  /></td>
						
						</tr>
						
						
						</table>	
						
<div class="espace"></div>




<table width="534">
						<tr>
						
						<td>Contraseña  </td>
						<td>Confima tu contraseña</td>
						
						</tr>
						
						<tr>
						<td>   <input  type="password" id="pass1" style="width:250px;" data-validation-engine="validate[required],minSize[6]" /></td>
						
						<td>   <input  type="password" id="pass2" style="width:250px;" name="pas"  data-validation-engine="validate[required,equals[pass1],minSize[6]]]" data-errormessage="El password no coincide con el anterior."/></td>
						
						</tr>
						
						
						</table>	
						
						
						
						<div class="espace2"></div>
						

<input class="submit" type="submit" value="Guardar datos"  />      </form>




			

<div id="guardar">
    <?php include("log.php") ?>
  
  </div>
  
  
  
      

		
	
		
			<div id="myModal" class="reveal-modal">
	
	
	<form id="formingreso" method="post" action="ver_usuario.php" enctype="multipart/form-data"  />
	<h1>Gracias por registrarte</h1>

			
	
	

		</div>

		
		
		
		
		
		
		
	<div id="myModal2" class="reveal-modal">
	
	
	<form id="formingreso" method="post" action="ver_usuario.php" enctype="multipart/form-data"  />
	
			
			<table align="center">
			
			<tr>
			
			<td> Usuario </td>
			
			
			
			
			</tr>
			
		
			<tr>
			
		 
			<td><input  type="text" id="rut_demo_3"   name="rut" style="width:250px;" data-validation-engine="validate[required]" />  </td>
			
			
			</tr>
			
			
			<tr>
			
			<td>password</td>
			
			</tr>
			
			<tr>
			
			<td> <input  type="password" id="pass1" name="contrasena" style="width:250px;" data-validation-engine="validate[required]" /> </td>
			</tr>
			
			</table>
			
			<input class="submit" type="submit" value="Ingresar">
			

	</form>
	
	
	
	<div id="log">
	
	<?php include("ver_usuario.php") ?>
	
	</div>
	
		</div>

	

		
		


<div id="myModal2" class="reveal-modal">
<h1>no existe</h1>
</div>


<div id="myModal2" class="reveal-modal">
<h1>si existe</h1>
</div>


  <div class="clear"></div>
<!-- plug in nivo slider --->


     <div class="clear"></div>
     
    <div class="heading-block"><span>Contacto</span></div>        
    
    <div class="col_14">
      <p><strong>Direccion</strong></p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="col_34 last">
      <div class="col_14">
      <p><strong>Direccion</strong></p>
      <p>Lorem ipsum dolor sit amet<br />
      231213 132 </p>
      </div>
    
      <div class="col_14">
      <p><strong>Telefonos</strong></p>
      <p><strong>Info : </strong> +56 525625<br/>
      <strong>Soporte : </strong> +56 525625</p>

      </div>
    
      <div class="col_14 last">
        <p><strong>Email</strong></p>
        <p><strong>Info : </strong> <a href="#">info@benchbanking.com</a><br/>
        <strong>Soporte : </strong> <a href="#">benchbanking.com</a></p>
      </div>
    </div>
  
    <div class="clear"></div>
  </div>
  
  <div class="clear"></div>
  
  <!-- Footer -->
  <div id="footer-wrapper">
    <div class="wrapper">
    
      <div class="footerbox col_14">
        <div class="heading-block-footer"><span>Articulos</span></div>  
        <ul>
          <li><a href="#">Articulo 1</a></li>
          <li><a href="#">Articulo 2</a></li>
          <li><a href="#">Articulo 3</a></li>
          <li><a href="#">Articulo 4</a></li>
        </ul>
      </div>
   
      <div class="footerbox col_14">
        <div class="heading-block-footer"><span>Nosotros</span></div> 
        <ul>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
         
          <li><a href="#">4</a></li>
        </ul>
      </div>
     
      <div class="footerbox col_14">
        <div class="heading-block-footer"><span> Servicios</span></div>
        <ul>
          <li><a href="#">Servicio</a></li>
          <li><a href="#">Servicio</a></li>
          <li><a href="#">Servicio</a></li>
          <li><a href="#">Servicio</a></li>
        </ul>
      </div>
     
      <div class="footerbox col_14 last">
        <div class="heading-block-footer"><span>Lorem ipsum dolor </span></div>
      
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta commodo interdum. Donec sed ligula quam, et volutpat sapien. Quisque id velit nibh. Nam id mi sed quam pellentesque elementum, justo vel dictum volutpat <a href="#">Read More &raquo;</a></p>
      </div>
      <div class="clear"></div>
    </div>
   
    <div class="clear"></div>
    
  
    <div class="footer-bottom">
      <div class="wrapper">
        
      
        <div class="social-links col_12">
          <ul>
            <li><a href="#"><img src="images/linkedin.png" alt=""/></a></li>
            <li><a href="#"><img src="images/twitter.png" alt=""/></a></li>
            <li><a href="#"><img src="images/facebook.png" alt=""/></a></li>
            <li><a href="#"><img src="images/flickr.png" alt=""/></a></li>
            <li><a href="#"><img src="images/youtube.png" alt=""/></a></li>
            <li><a href="#"><img src="images/rss.png" alt=""/></a></li>
          </ul>
        </div>
     
     
       
      </div>
 
    </div>
  
    
  </div>
 

</div>
  
  
</body>

</html>