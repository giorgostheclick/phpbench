<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>








<!-- paso 00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 -->


<h1 style="margin-left:20px;">¿Que necesitas?</h1>

<form action="Usuariocredito.php" method="post">
<input type="hidden" name="id" value="<?php echo $id1 ?>" />
<table width="358" style="margin-left:20px;">
<tr>
<td width="234"> Credito de consumo </td>

<td width="56"><input type="radio" name="credito" value="Credito de consumo"   <?php
if ($usuario['credito'] == 'Credito de consumo'){
echo'
checked="checked" ';

}

?>/></td>
</tr>


<tr>
<td>  Credito automotriz  </td>
<td><input type="radio" name="credito" value="Credito automotriz"    
 <?php
if ($usuario['credito'] == 'Credito automotriz'){
echo'
checked="checked" ';

}

?>

/></td>
</tr>


<tr>
<td> Credito Hipotecario </td>
<td><input type="radio" name="credito" value="Credito Hipotecario"  
 <?php
if ($usuario['credito'] == 'Credito Hipotecario'){
echo'
checked="checked" ';

}

?>

/></td>
</tr>


<tr>
<td> consolidación de deuda / refinanciamiento </td>
<td><input type="radio" name="credito" value="consolidación de deuda / refinanciamiento"
 <?php
if ($usuario['credito'] == 'consolidación de deuda / refinanciamiento'){
echo'
checked="checked" ';

}

?>


<?php
if ($usuario['credito'] == ''){
echo'
checked="checked" ';

}

?>

/></td>
</tr>






</table>
<div class="espace2"></div>
<div class="espace2"></div>
<div class="espace2"></div>


<table width="478" style="margin-left:20px;">
<tr>
<td width="166">Monto del credito</td>
<td width="300"><input type="text" name="monto" value="<?php echo $usuario['monto'] ?>" /></td>
</tr>

<tr>
</tr>

</table>


<div class="espace2"></div>
<table width="478" style="margin-left:20px;">
<tr>
<td width="166">Plazo</td>
<td width="300"><input type="text" name="plazo"   value="<?php echo $usuario['plazo'] ?>"/></td>
</tr>

<tr>
</tr>

</table>
<input type="submit"  style="margin-left:20px" value="Guardar"/>

</form>


<!-- paso 00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 -->


<!-- paso 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->









            <h2 class="StepTitle">Tus datos personales (datos del titular)</h2>
            <ul type="disk">
  				    
            </ul>
			
			
			<br />
			<br />
			<br />
              
			  
			  <form name="myform" id="myform" class="myform" method="post" action="UsuarioAgregaDatos.php" enctype="multipart/form-data"  />		
				
			  <table width="723" height="59" border="0"" " style="margin-left:20px;"723>
				
				<tr>
				<td> Rut    </td>
				<td> Nombre </td>
				
				
				
				<tr>
				
				
				<tr>
				
				<input type="hidden"   name="id"  value=" <?php echo $usuario['id']; ?>"  /> 
				
				<td><input type="text" data-validation-engine="validate[required]"  name="rut"  value=" <?php echo $usuario['rut']; ?>"  /> </td>
				<td> <input type="text" data-validation-engine="validate[required]"  id="nombre" name="nombre"  value=" <?php echo $usuario['nombre'] ;?>" /></td>
				
				
				</tr>
				
				</table>
				
				<div class="espace2"></div>
				
				<table width="723"  style="margin-left:20px">
				<tr>
				<td> Apellido Paterno   </td>
				<td>  Apellido Materno </td>
				
				
				
				
				<tr>
				
				
				<tr>
				
				<td><input type="text" data-validation-engine="validate[required]"   name="apellido1"  value="<?php echo $usuario['apellido']; ?>" /> </td>
				<td> <input type="text" data-validation-engine="validate[required]"   name="apellido2"   value="<?php echo $usuario['apellidoSeg']; ?>"  /></td>
				
				
				</tr>
				
				</table>
				
				
				
				<div class="espace2"></div>
				
				
				<table width="723"  style="margin-left:20px">
				<tr>
				
				<td width="356"> Estado Civil</td>
				
				<td width="355">Nivel de educacion</td>
				
				
			
				
				
			
				
				</tr>
				
				
				<tr>
				
				
			
				<td> <select name="estadociv" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"  >
                                       
                                       <option value="">Opcion</option>
									   
									   <option value="<?php echo $usuario['estadociv']; ?>" selected="selected" >   <?php echo $usuario['estadociv']; ?>  </option>
									   
									   
                                       <option value="soltero" >Soltero</option>
									   <option value="separado" >Separado</option>
									   <option value="viudo" >Viudo</option>
									   <option value="Casado soc. cony.">Casado soc. cony.</option>
									   <option value="Casado con se">Casado con sep</option>
									   <option value="Casado part gan">Casado part gan</option>
									   </select>     
									   
									   </td>
				
				
				
				<td>    <select name="niveleducacion" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"   />
                                       
                                         <option value=" <?php  echo $usuario['niveleducacion']; ?>" selected="selected"><?php echo $usuario['niveleducacion']; ?> </option>
                                         <option value="basico" >Basico</option>
										 <option value="medio" >Medio</option>
										 <option value="tecnico" >Tecnico</option>
										 <option value="universitario">Universitario</option>
										 <option value="universitario">Universitario</option>
												  
												 
                                            </select></td>
											
											
											
											
											
											
											
											
											
			
			
		
											
											
											
											
											
											
				
				</tr>
				</table>
				
				
				
				
				<div class="espace2"></div>
				<table style="margin-left:20px">
				
				<tr>
				
				<td>Sexo</td>
				</tr>
				
				
				
				<tr>
					<td>    <select name="sexo" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"   >
                                       
                                         <option value=" <?php echo $usuario['sexo']; ?>"><?php echo $usuario['sexo']; ?></option>
                                         <option value="Hombre" >Hombre</option>
										 <option value="Mujer" >Mujer </option>
										 
												 
                                            </select>
											
											
											</td>
				</tr>
				
				</table>
				
				<div class="espace2"></div>
				<table width="723" style="margin-left:20px">
						
						<tr>
				<td width="354"> Casa en que habitas</td>
				
				<td width="357"> N° de Dependientes </tr>
				
				
				<tr>
				
				<td> <select data-validation-engine="validate[required]" name="tipocasa" data-errormessage-value-missing="Debe seleccionar un opcion" > 
				
				<option value=" <?php echo $usuario['tipocasa']; ?>"> <?php echo $usuario['tipocasa']; ?></option>
				<option value="Propia con Hipot">Propia con Hipot.</option>
				<option value="Propia sin Hipot.">Propia sin Hipot.</option>
				<option value="Arrendada">Arrendada</option>
				<option value="De la familia">De la familia</option>
			
				</select>
				</td>
				<td><input type="text" data-validation-engine="validate[required]"   name="ndependientes"  value="<?php echo $usuario['ndependientes']; ?> " /></td>
				
				
				</tr>
				
		</table>
				
				
				
				<div class="espace2"></div>
			
			
				
				<table width="723"  style="margin-left:20px" >
				
				
			    <tr>
				
				<td width="231">Profesión</td>
				<td width="240">Universidad o Instituto</td>
				
				
				
				</tr>
			
			
			<tr>
			
			<td> <input type="text" data-validation-engine="validate[required]"  name="profesion"    value="<?php echo $usuario['profesion'];?>"  /> </td>
			<td> <input type="text" data-validation-engine="validate[required]"   name="universidad"  value="<?php echo $usuario['universidad'];?>" /> </td>
			
			
			
			</tr>
				
				
				
				</table>
				
				<div class="espace2"  ></div>
				
				<table width="723"  style="margin-left:20px" >
				
				
			    <tr>
				
				<td width="355">Actividad</td>
			
				
				
				
				</tr>
			
			
			<tr>
			
			<td> <input type="text" data-validation-engine="validate[required]"  name="actividad"    value="<?php echo $usuario['actividad'];?>"  /> </td>
		
			
			
			
			</tr>
				
				
				
				</table>
				
				
				
			<div class="espace2"  ></div>
				
				<table style="margin-left:20px;"  width="723">
				<tr>
				<td  width="231">Direccion</td>
				<td  width="240">Comuna</td>
				
				
				</tr>
				
				
				<tr>
				
				<td><input type="text" data-validation-engine="validate[required]"   name="direccion"  value="<?php echo $usuario['direccion'];?>"  /></td>
				<td><input type="text" data-validation-engine="validate[required]"   name="comuna"     value="<?php echo $usuario['comuna'];?>"  /></td>
			
				
				
				</tr>
				
				</table>
				
				
					<div class="espace2"  ></div>
			
			
			
			<table style="margin-left:20px;"  width="842">
			<tr>
			<td  width="355">Region</td>
			</tr>
			
			<tr>
				<td><input type="text" data-validation-engine="validate[required]"   name="region"     value="<?php echo $usuario['region'];?>" /></td>
			</tr>
			</table>
			
			
		
				
				<div class="espace2"  ></div>
				
				<table style="margin-left:20px;"  width="723">
				<tr>
				<td  width="354">Teléfono 1</td>
				<td  width="357">Teléfono 2</td>
			
				
				</tr>
				
				
				<tr>
				
				<td><input type="text" data-validation-engine="validate[required]"   name="telefono1" value="<?php echo $usuario['telefono1'];?>" /></td>
				<td><input type="text" data-validation-engine="validate[required]"   name="telefono2" value="<?php echo $usuario['telefono2'];?>"   /></td>
				
				
				
				</tr>
				
				</table>
				
				<input type="submit" style="margin-left:20px; margin-top:20px;"  value="Guardar" class="submit"/>
				
				
				 
				
				</form>
				
				
				
			
				<div id="myModal1" class="reveal-modal">
				<h1>Tus datos an sido actualizados correctamente</h1>
				</div>
				
				
				
					<div class="espace2" ></div>
				
				<form id="laborales" name="laborales" action="laboralsave.php" method="POST">

	<input type="hidden"  style="width:200px;"  name="iduser"  value=" <?php echo $usuario['id']; ?>"  /> 
  <h1 style="margin-left:20px">Antecedentes Laborales</h1>
	
	<?php echo $usuario['id']; 
			$ant = laboral( $usuario['id']);
			
			
			?>
		<table width="723" style="margin-left:20px;">
	
			<tr>
			
			<td>Rut:</td>
			<td>Situacion laboral:</td>
			</tr>
			
			<tr>
			
			<td><input type="text" name="rutprin" value ="<?php echo $usuario['rut'];?>" /></td>
			
			<td>
			<select name="laboral">
			<option value="<?php echo $ant['situacion_laboral'] ?> "><?php echo $ant['situacion_laboral'] ?></option>
			
			<option value="Dependiente">Dependiente</option>
			<option value="Independiente">Independiente</option>
			
			
			</select>
			</td>
			
			
			</tr> 
			
			
			
			
		</table>	
		<div class="espace2"></div>
			
			
			<table width="723" style="margin-left:20px;">
			<tr>
			<td>Empleador o Empresa</td>
			<td>Tipo de actividad</td>
			
			</tr>
			
			
			<tr>
			<td>  <input type="text" name="empleador" value="<?php echo $ant['Empleador_Empresa'] ?>"/> </td>
			<td> <input type="text" name="actividad"  value="<?php echo $ant['tipo_actividad'] ?>"/></td>
			
		    
			
			</tr>
			
		
			
	  </table>
	  
	  
	  	<div class="espace2"></div>
		
		
	  <table width="723" style="margin-left:20px;">
	  <tr>
	  <td>Domicilio</td>
	  <td>Calle</td>
	  </tr>
	  
	  <tr>
	   <td><input  type="text" name="calle" value="<?php echo $ant['calle'] ?>"/></td>
	    <td><input type="text" name="numero"  value="<?php  echo $ant['numero'] ?>"/></td>
	  
	  </tr>
	  
	  </table>
		
		
		
			<div class="espace2"></div>
			
			
		 <table width="723" style="margin-left:20px;">
		 
		 <tr>
		 
		 <td>Ciudad: </td>
		 <td>Comuna: </td>
		 
		 </tr>
		 
		 
		 <tr>
		<td><input type="text" name="ciudad" value="<?php echo $ant['ciudad']; ?>"></td>
		<td><input type="text" name="comuna" value="<?php echo $ant['comuna']; ?>"/></td>
		 
		 </tr>
		 
		   </table>
		
		
		
			<div class="espace2"></div>
		
		<table width="723" style="margin-left:20px;" >
		
		<tr>
		<td>Region</td>
		<td>Telefono</td>
		</tr>
		
		<tr>
		<td><input type="text" name="region" value="<?php echo $ant['region']; ?>"/></td>
		<td><input type="text" name="telefono" value="<?php echo $ant['telefono']; ?>"/></td>
		</tr>
		
		
		</table>
		
		
		
			<div class="espace2"></div>
		
		
		
		<table width="723" style="margin-left:20px;" >
		
		<tr>
		<td>Celular:</td>
		<td>Fecha de ingreso: </td>
		</tr>
		
		<tr>
		<td><input type="text" name="celular" value="<?php echo $ant['celular']; ?>"/></td>
		<td><input type="text" name="fecha_ingreso" value="<?php echo $ant['fecha_ingreso']; ?>"/>        </td>
		
		</tr>
		
		
		</table>
		
		
			<div class="espace2"></div>
		
		
		<table width="723" style="margin-left:20px;" >
		
		<tr>
		<td>Cargo Actual:</td>
		<td>Empleador anterior: nombre</td>
		</tr>
		
		
		<tr>
		<td><input type="text" name="cargo_actual" value="<?php echo $ant['cargo_actual']; ?>"/></td>
		<td><input type="text" name="giro_empresa_anterior" value="<?php echo $ant['nombre_empleador_anterior']; ?>"/>       </td>
		
		
		</tr>
		
		
		</table>
		
		
		
		<table width="723" style="margin-left:20px;" >
		
		<tr>
		<td>Antiguedad</td>
		<td>Fecha Finiquito</td>
		</tr>
		
		
		<tr>
		<td><input text="text" name="antiguedad"  value="<?php echo $ant['antiguedad_empleador_anterior']; ?>"/></td>
		<td><input type="date" name="finiquito"  value="<?php echo $ant['fecha_finiquito']; ?>"/>  </td>
		
		
		</tr>
		
		
		</table>
	
	<div class="espace2"></div>
	<div style="margin-left:20px;">
	

 <input type="submit" value="Guardar datos"   />

	
	</div>
	
	
	</form>
	
	<div class="espace2"></div>			
				
				
				<div id="laboralsave">
				
				<?phpinclude("laboralsave.php");?>
				
				</div>
				
				<div id="guardar1">
				
				<?phpinclude("UsuarioAgregaDatos.php");?>
				
				</div>
			
				
				
		<!-- paso 111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->		
		
		
		
		<!-- paso 22222222222222222222222222222222222222222222222222222222222222222222222222222222222-->		
		
		
		
		  <h2 style="margin-left:20px">Datos del conyuge</h2>	
           
		  
<form action="conyugeAgregaDatos.php" id="formcon" method="post" enctype="multipart/form-data" >
		  
		  
		 
		  
		  <div class="espace2"></div>
		  
		  <table style="margin-left:20px;"  width="723">
				<tr>
				<td  width="358">Rut</td>
				
				<td  width="353">Fecha Nacimiento</td>
				
				
				</tr>
				
				
				<tr>
				
				
				<?php 
				
				$conyuge = datos_conyugue($rut);
				
				
				
				?>
				
				<td><input type="hidden" value="<?php echo $rut ?>" name="rutprin" /> <input type="hidden" value=" <?php echo $usuario['id'] ?>" name="iduser" /> <input type="hidden" value=" <?php echo $usuario['id'] ?>" name="iduser" /><input type="text" value="<?php echo $rut ?>" name="rut" /> </td>
				
				
				
				
				
				
				<td width="353">   <select class="chosen" style="width:80px;" name="dia">
				
<option selected="selected" value="<?php echo $conyuge['dia'] ?>"> <?php echo $conyuge['dia'] ?> </option>			
<option value="1">1</option>
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
<option value="<?php echo $conyuge['mes']; ?>" selected="selected" ><?php echo $conyuge['mes']; ?>  </option>                                             
<option value="1">enero</option>
<option value="2">febrero</option>
<option value="3">marzo</option>
<option value="4">abril</option>
<option value="5">mayo</option>
<option value="6">junio</option>
<option value="7">julio</option>
<option value="8">agosto</option>
<option value="9">septiembre</option>
<option value="10">octubre</option>
<option value="11">noviembre</option>
<option value="12">diciembre</option>
                                            </select>
											
											
											
											<select class="" end_year="1912" id="user_profile_attributes_date_birth_1i"  name="ano" order="day month year" start_year="2002" style="width:100px">

<option value="<?php echo $conyuge['ano']; ?>" selected="selected" > <?php echo $conyuge['ano']; ?> </option>										
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
											
											
											
			
				
			
				
				
				
				</tr>
				
				
				</table>
		   
		   
		   <div class="espace2"></div>
		   
		   <table style="margin-left:20px;">
		   <tr>
		   
		   </tr>
		   <td>Telefono</td>
		   
		   <tr>
		   
		   <td width="335"><input type="text" data-validation-engine="validate[required]"  name="telefono" value=" <?php echo $conyuge['telefono']; ?> " /></td>
		   
		   </tr>
		   </table>
		   
		   <div class="espace2"></div>
		   
		     <table style="margin-left:20px;"  width="723">
				<tr>
				<td  width="354">Nombre</td>
				<td  width="357">Apellido Paterno</td>
			
				
				</tr>
				
				
				<tr>
				
				<td><input type="text" data-validation-engine="validate[required]"   name="nombre"  value="<?php echo $conyuge['nombre']; ?>" /></td>
				<td><input type="text" data-validation-engine="validate[required]"   name="apellido1" value="<?php echo $conyuge['apellido1']; ?>"   /></td>
				
				
				
				</tr>
				
				</table>
				
				<div class="espace2"></div>
		   
		    <table style="margin-left:20px;"  width="723">
			<tr>
			 	<td >Apellido Materno</td>
			</tr>
			
			<tr>
			<td><input type="text" data-validation-engine="validate[required]"  name="apellido2"  value="<?php echo $conyuge['apellido2']; ?>"  /></td>
			</tr>
			</table>
		   
		  
			
			
		   
		   <div class="espace2"></div>
		   
		   
		   
		   
				<table width="723"  style="margin-left:20px">
				<tr>
				
				<td width="350">Nivel de educacion</td>
				
				<td width="361">Nacionalidad</td>
			
				
				
			
				
				</tr>
				
				
				<tr>
				
				<td> <select name="educacion" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"   >
                                       
									   <option value="<?php echo $conyuge['educacion']; ?>" selected="selected" > <?php echo $conyuge['educacion']; ?></option>
                                               <option value="">Opcion</option>
                                                <option value="basico" >Basico</option>
												
												  <option value="medio">Medio</option>
												  
												   <option value="tecnico">Tecnico</option>
												   <option value="universitario">Universitario</option>
												    <option value="otro">Otro</option>
												   
                                            </select>     </td>
				
				
				
				<td>    <select name="nacionalidad" data-validation-engine="validate[required]" data-errormessage-value-missing="Debe seleccionar un opcion"  >
                                       
                                               <option value="">Opcion</option>
											   
						<option value="<?php echo $conyuge['nacionalidad']; ?>"  selected="selected"> <?php echo $conyuge['nacionalidad']; ?></option>
                        <option value="Chilena" >Chilena</option>
						<option value="Extranjero residente" >Extranjero residente</option>
						<option value="Extranjero no residente" >Extranjero no residente</option>
												
                                            </select></td>
											
											
											
											
			
			
		
											
											
											
											
											
											
				
				</tr>
				
				
				</table>
				
				
				
				
				
				<div class="espace2"></div>
				
				
				
				  <table style="margin-left:20px;"  width="723">
				<tr>
				<td  width="349">Profesion</td>
				<td  width="362">Universidad o Instituro</td>
			
				
				</tr>
				
				
				<tr>
				
				<td><input type="text" data-validation-engine="validate[required]"  name="profesion"  value="<?php echo $conyuge['profesion']; ?>" /></td>
				<td><input type="text" data-validation-engine="validate[required]"  name="universidad"   value="<?php echo $conyuge['universidad']; ?>" /></td>
			
				
				
				</tr>
				
				</table>
		   
		   <div class="espace2"></div>
		   
		   <table style="margin-left:20px;"  width="723">
		   
		   <tr>
		   <td>Actividad</td>
		   </tr>
		   
		   	<td><input type="text" data-validation-engine="validate[required]"   name="actividad"   value="<?php echo $conyuge['actividad']; ?>" /></td>
		   
		   
		   
		   </table>
		   
		   
		   
		   
		   
		   <div class="espace2"></div>
				
				<table width="723" style="margin-left:20px;" table >
				
				<tr>
				<td width="231">Cargo actual</td>
				<td width="274">Antiguedad laboral</td>
				</tr>
				
				
				<tr>
				<td><input type="text" data-validation-engine="validate[required]"   name="cargo"  value="<?php echo $conyuge['cargoactual']; ?>"  /></td>
				<td><input type="text" data-validation-engine="validate[required]"   name="antiguedad"  value="<?php echo $conyuge['antiguedad']; ?>"  /></td>
				
				</tr>
		        
				
				</table>
				
				
				<div class="espace2"></div>
				
				<table width="723" style="margin-left:20px;" table >
				
				<tr>
				<td width="357">Renta liquida</td>
				<td width="354">Empresa trabajo</td>
				</tr>
				
				
				<tr>
				<td><input type="text" data-validation-engine="validate[required]"   name="renta"  value="<?php echo $conyuge['renta']; ?>" /></td>
				<td><input type="text" data-validation-engine="validate[required]"   name="empresa"  value="<?php echo $conyuge['empresa']; ?>" /></td>
				
				</tr>
		        
				
				</table>
				
				
				<div class="espace2"></div>
			<div style="margin-left:20px">	
				
				<input type="submit" value="guardar" />
				
				</div>
				
				
				</form>
		   
		   
		   
		   
		  
		   
		   
		   <div id="guardar2">
		   
		   <?php
		   
		   include("conyugeAgregaDatos.php");
		   
		   ?>
		   
		   </div>
		   
		   
		    <div id="myModal2" class="reveal-modal">
				<h1>Tus datos an sido actualizados correctamente</h1>
			</div>
		   
		   
               
		
				<!-- paso 22222222222222222222222222222222222222222222222222222222222222222222222222222222222-->	
				
				
				<!-- paso 33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333-->	
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
		<form  action="bienesraices.php" method="post" id="bienes">
		<div style="margin-left:20px">
		<h1>Detalles de bienes raices</h1>
		</div>
		<table width="465"  style="margin-left:20px">
			<tr>
				<th height="35" colspan="2">.</th>
			</tr>
			<tr>
				<td width="126" height="41">Tipo: </td>
				<td width="323">
				<input type="hidden" name="iduser" value="<?php echo $usuario['id'] ?>"/>
				<input type="text" name="tipo_bienes_raices"/></td>
			</tr>
			<tr>
				<td height="43">Direccion: </td>
				<td><input type="text" name="direccion_bienes_raices"/></td>
			</tr>
			<tr>
				<td height="43">Comuna: </td>
				<td><input type="text" name="comuna_bienes_raices"/></td>
			</tr>
			<tr>
				<td height="43">Avaluo Fiscal: </td>
				<td><input type="text" name="avaluo_fiscal_bienes_raices"/></td>
			</tr>
			<tr>
				<td>Rol: </td>
				<td><input type="text" name="rol_bienes_raices"/></td>
			</tr>
			<tr>
				<td height="38">Hipotecado:</td>
				<td>
					Si <input type="radio"  name="hipoteca_bienes_raices" value="si"  checked="checked"/>
					No <input type="radio" name="hipoteca_bienes_raices" value="no"/>
				</td>
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="Enviar" value="Agregar"/></td>
			</tr>
		</table>
		
		
	</form>
	
	
	
	
	
	
	
	

	
	
	<div id="bienesdiv">
	
	
	<?php 
	 $user = $usuario['id'];
	 $iduser = $user;
	 echo  $usuario['id'];
	 
	 
	
	
	?>
	 <?phpinclude("bienesraices.php");?>
	 
	 
	 <div class="uno table">
<table width="700" border="1" class="uno">
	
	<tr>
		<td><b>tipo</b></td>
		<td><b>direccion</b></td>
		<td><b>comuna</b></td>
		<td><b>avaluo_fiscal</b></td>
		<td><b>rol</b></td>
		<td><b>hipoteca</b></td>
	</tr>
	
	
	<?php
	
	$sql2 = mysql_query( "
		SELECT *
		FROM bienes_raices where id_user ='$iduser'
		") or die(mysql_error());
		
	while($row7 = mysql_fetch_array($sql2))
	{
	

	?>
	
	<tbody>
	<tr>
	
		<td><?php echo $row7['tipo']; ?></td>
		<td><?php echo  $row7['direccion']; ?></td>
		<td><?php echo  $row7['comuna']; ?></td>
		<td><?php echo $row7['avaluo_fiscal']; ?></td>
		<td><?php echo $row7['rol']; ?></td>
	    <td><?php echo  $row7['hipoteca']; ?></td>
	</tr>
	
	</tbody>
	
	
	<?php
	}
	?>

</table>
</div>
	
	</div>
			
			
			<div class="espace2"></div>
			
			<div style="margin-left:20px">
		<h1>Detalle Ahorro e Inversion.</h1>
		</div>
			
			<form  id="ahorro" action="ahorro.php" method="post">
		<table border="0" class="tabla1" table width="489"  style="margin-left:20px">
			<tr>
				<th height="27" colspan="2">
				
				<?php echo $usuario['id'];
				$user = $usuario['id'];
				 ?>
				
				</th>
			</tr>
			<tr>
				<td width="127" height="43">Tipo:</td>
				<td width="352">
				
				<input type="hidden" name="iduser" value="<?php echo $usuario['id'] ?>"/>
				<input type="text" name="tipo_inversion"/></td>
			</tr>
			<tr>
				<td height="41">Instituci&oacute;n:</td>
				<td><input type="text" name="institucion_inversion"></td>
			</tr>
			<tr>
				<td height="42">Valor comercial:</td>
				<td><input type="text" name="valorcomercial_inversion"/></td>
			</tr>
			<tr>
				<td height="29">Prendado:</td>
				<td>
					Si <input type="radio" name="prendado_inversion" value="si" checked="checked"/>
					No <input type="radio" name="prendado_inversion" value="no"/>
				</td>
			</tr>
			<tr>
				<td>Reservado Banco:</td>
				<td><input type="text" name="reservadobanco_inversion"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="enviar" value="Agregar">
				</td>
				
			</tr>
		</table>
	</form>
			
			
			
	<div id="divahorro">
	
	<?phpinclude("ahorro.php");?>
	
	<div class="uno table">
	<table width="300" border="1" class="">

	<tr>
		<td><b>Tipo</b></td>
		<td><b>Institucion</b></td>
		<td><b>Valor comercial</b></td>
		<td><b>Prendado</b></td>
		
	</tr>
	
	<?php

	$sql2 = mysql_query( "
		SELECT *
	   from ahorro_inversion where id_user='$user'
		");
	
	while($row = mysql_fetch_array($sql2))
	{
	
	?>
	<tbody>
	<tr>
		<td><?php print $row['tipo']; ?></td>
		<td><?php print $row['institucion']; ?></td>
		<td><?php print $row['valor_comercial']; ?></td>
		<td><?php print $row['prendado']; ?></td>

	</tr>
	
	</tbody>
	<?php
	}
	
?>
	
</table>
	
</div>

	
	
	</div>
			
			
			
				<!-- paso 33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333-->	
				
				
				
				
				
				
				
				
				
				<h1 style="margin-left:20px">Tus deudas  </h1>
			<form id="formdeuda" action="deuda.php" method="POST" style="margin-left:20px;">
			
			<input type="hidden" name="iduser" value="<?php echo $usuario['id']?>" />
		<table width="521" border="1">
			<tr>
				<th colspan="2">Detalle deudas.</th>
			</tr>
			<tr>
				<td width="145" height="46">Tipo:</td>
				<td width="360"><input type="text" name="tipo_detalle_deuda"/></td>
			</tr>
			<tr>
				<td height="42">Instituci&oacute;n:</td>
				<td><input type="text" name="institucion_detalle_deuda"/></td>
			</tr>
			<tr>
				<td height="43">Pago mensual:</td>
				<td><input type="text" name="pago_mensual_deuda"/></td>
			</tr>
			<tr>
				<td height="42">Deuda total:</td>
				<td><input type="text" name="deuda_total"/></td>
			</tr>
			<tr>
				<td height="35">Vencimiento final:</td>
				<td><input type="date" name="venciomiento_final_deuda"/></td>
			</tr>
			<tr>
				<td>Deuda Vigente:</td>
				<td><input type="text" name="deuda_vigente_final"/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="enviar" value="enviar" /></td>
			</tr>	
		</table>
	</form>
			
			
			
            
					
	<div id="deuda">
	
	<?phpinclude("deuda.php");?>
	
	
	
	<div class="uno table">
	<table width="300" border="1" class="">

	<tr>
		<td><b>Tipo</b></td>
		<td><b>Institucion</b></td>
		<td><b>Pago mensual</b></td>
		<td><b>Deuda total</b></td>
	    <td><b>Vencimiento</b></td>
		<td><b>Vigente</b></td>
		
	</tr>
	
	<?php

	$sql2 = mysql_query( "
		SELECT *
	   from deudas where id_user='$user'
		");
	
	while($row = mysql_fetch_array($sql2))
	{
	
	?>
	<tbody>
	<tr>
		<td><?php print $row['tipo']; ?></td>
		<td><?php print $row['institucion']; ?></td>
		<td><?php print $row['pago_mensual']; ?></td>
		<td><?php print $row['deuda_total']; ?></td>
		<td><?php print $row['vencimiento']; ?></td>
		<td><?php print $row['vigente']; ?></td>


	</tr>
	
	</tbody>
	<?php
	}
	
?>
	
</table>
	
</div>
		
		
		</body>
</html>