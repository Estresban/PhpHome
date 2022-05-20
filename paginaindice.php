<?php
	
	ini_set("session.cookie_lifetime","600");
	ini_set("session.gc_maxlifetime","600");
	session_start(); 
	include("conexion.php");
	//include("variables.php");
	//include("variables2.php");


?>

<!DOCTYPE HTML>
<head>
	<title>Home Domotica</title>
	<meta name="description" content="Accionamientos y sensores">
                <link rel="stylesheet" href="css/text.css" type="text/css" media="all">

		<style type="text/css"></style>
		</head>
                                                            
  	<body> 
	<div class="view">
	<div class="header-wrapper">
	<h1> Domotica Home </h1>
	</div>

	<div class="group-wrapper">
        <FORM>
       


        <table border="0" align="center">
        <tbody>
        <tr>
	          <td><h4>Temperatura</h4></td>
          	<td><h3><?php echo	$retorno[2].'  &deg;C</h3>'?></h3></td>
          	<td></td>
        </tr>
                                                    
     <tr>
     <td><h4>Interruptores </h4></td>
     <td><INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginageneral1.php'"></td>
        <td>
          <div class='azul-circle'>
          <div class='glare'></div></div></td>
        
      </tr>

	<tr>
     <td>
     <h4>Estacion Meteorologica</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginasensores.php'">
     </td>                                                                                  
        <td>
	        <div class='azul-circle'>
          <div class='glare'></div></div></td>
        </tr>
	        
	
<tr>
     <td>
     <h4>Puerta</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginapuerta.php'">
     </td>                                                                                
        <td>
	        <div class='azul-circle'>
          <div class='glare'></div></div></td>
        
        </tr>

	<tr>
     <td>
     <h4>Electrodomestico</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginaelectrodomesticos.php'">
     </td>                                                                                  
         <td>
	        <div class='azul-circle'>
          <div class='glare'></div></div></td>
        
        </tr>
	
	<tr>
     <td>
     <h4>Todas las paginas</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginageneral.php'">
     </td>                                                                                  

     <td>
	<div class='azul-circle'>
          <div class='glare'></div></div></td>
        
        </tr>


	</tbody>
	</table>
	 <h4 align="center">
        <input type=button onClick="location.href='index.php'" value='Salir'>
	</h4> 
	</FORM>
	<tr>
        <h3 align="center">
	&copy; Autores - Esteban Vicario y Jose Garcia
	<br> 
	Spain - Abril - 2022
	</h3>
	</tr>
	</div>
	</div>
     </body>
   </html> 
