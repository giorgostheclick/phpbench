<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/jquery.tools.tabs.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.html"></script>
<script type="text/javascript" src="js/functions.js"></script>

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/fonts/TitilliumText14L_400.font.js"></script>
<!-- cufon //-->
<script type="text/javascript">
  Cufon.replace('h1')('h2')('h3')('h4')('h5')('#myslidemenu a',{hover: 'true'})('#myslidemenu li li a',{hover: 'true'})('a.button', {hover: 'true'})('.nivo-caption p')('.heading-block span')('.heading-block-footer span');
</script>


<!-- cufon  fin //-->
<!-- slider //-->
<script type="text/javascript"> 
$(window).load(function() {
  $('#slider').nivoSlider({
    effect:'random',
    animSpeed:500, 
    pauseTime:3000,
    directionNav:true,
    directionNavHide:true,
    controlNav:false      
    });
});
</script>
<!-- slider fin  //-->

<script type="text/javascript"> 

$(document).ready(function(){
 
var menu = 0;
 
$('#drop_bar_link').click(function(){
 
    if(menu == 0){
 
    menu = 1;
 
    $('#drop_bar').animate({
        marginTop: '0',
        marginBottom: '-500',
    });
 
    }
 
    else{
 
    menu = 0;
 
    $('#drop_bar').animate({
        marginTop: '-500',
        marginBottom: '0',
    });
 
    }
 
    return false;
 
});
 
});

</script>
	


</head>

<body>
<div id="drop_bar">
<div id="drop_bar_contenido">
 <div style="width:800px; height:30px;  position:relative; margin:auto;">
<h1 style="color:#FFF; text-align:center;">FORMULARIO DE INGRESO</h1>			
			</div>
 
<div id="drop_bar_link"><a href="#top_bar">Registrate</a></div>
</div>
</div>
 
<p></p>

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
            <li><a href="#"  class="selected">Home</a>
              
            </li>
            <li><a href="#">Quienes Somos</a></li>
            <li><a href="#">Que hacemos</a></li>
            
    
            <li><a href="#">Solicitar</a></li>
			
            <li><a href="contact.html">Contacto</a></li>
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
  
  <script type="text/javascript">$('#noscript').remove();</script>
</body>

</html>