<?php
	ini_set("session.cookie_lifetime","600");
	ini_set("session.gc_maxlifetime","600");
	session_start(); 
 include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<html>
    <head>
	  <title>RaspBerry Domotica</title>
	  <link rel="stylesheet" href="css/text.css" type="text/css" media="all">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   </head>
  <body>
 					<div class="view">
					<div class="header-wrapper"></div>
					<div class="group-wrapper">
          <form action="verificar-login.php" method="POST" >
          <table  border="0" align="center">
              <tbody>
							  <tr><td><h5>Introduce Usuario y Contraseña</h5></td></tr>
                <tr><td><img class="logo" src="images/Raspberry_logo.png" ></td></tr>	
								<tr><td><input type="text" name="usuario-inicio" placeholder="Usuario"></td></tr>
								<tr><td><input type="password" name="password-inicio" placeholder="Contraseña"></td></tr>
								<tr><td><button  type="submit" name="boton-inicio-confirmar">Confirmar</button></td></tr>
							</tbody>
          </table>
          </form>
					</div>
				  </div>
    </body>
  </html>
