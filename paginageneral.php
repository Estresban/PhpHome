<?php
        session_start();
	include("conexion.php");
        //include("serial.php");

        include ("ordenes.php");
       include("variables.php");
        ?>
<!DOCTYPE HTML>
<head>
        <title>Domotica</title>
	<meta name="description" content="Accionamientos">                                                      
        <meta http-equiv="refresh" content="(refreshPage); url=/">
        <link rel="stylesheet" href="css/text.css" type="text/css" media="all">
        <style type="text/css"></style>
</head>
<body>
        <form method="post" action="
        <?php 
        //echo $_SERVER['PHP_SELF'];
        ?>">
	<div class="view">
	  <div class="header-wrapper">
	  <h1>Proyecto</h1>     
	  </div>

	<div class="group-wrapper">
  <td><table border="0" align="left">
        <tbody>
	<tr>
     <td>
     <h4>Conexion</h4>
	<?php 
	if ($status='1'){
		echo "<td><div class='azul-circle'><div class='glare'></div></div></td>";}
	else{
		echo "<td><div class='red-circle'><div class='glare'></div></div></td>";}
     ?></td></tr>
     <tr><td><?php 
	echo "<h4>Humedad </h4><td><h4>$retorno[0] % </h4></td>";
     ?></td></tr>

     <tr><td>
	<?php 
	echo "<h4>Temperatura </h4><td><h4>$retorno[2] ºC. </h4></td>";
     ?></td></tr>
	
	<tr><td><?php 
     echo "<h4>Presion atmosferica </h4><td><h4>$retorno[6] mbar</h4></td>";
     ?></td></tr>

	<tr><td><?php 
     echo "<h4>Altitud</h4><td><h4>$retorno[4] m. </h4></td>";
     ?></td></tr>
	
	<tr><td><?php 
     echo "<h4>Sensacion de calor </h4><td><h4>$retorno[1] ºC. </h4></td>";
     ?></td></tr>

	<tr><td><?php 
     echo "<h4>Temperatura 2 </h4><td><h4>$retorno[3] ºC. </h4></td>";
     ?></td></tr>

	<tr><td><?php 
     echo "<h4>Luminosidad </h4><td><h4>$retorno[5] lum. </h4></td>";
     ?></td></tr>

	<tr><td>
     <h4>Estados recibidos</h4></td></tr>
     
        <tr><td><?php 
     echo "<h4>Retorno A </h4><td><h4>$retorno[7] </h4></td>";
     ?></h4>
     </td></tr>

	<tr><td><?php 
     echo "<h4>Retorno B </h4><td><h4>$retorno[8] </h4></td>";
     ?></h4>
     </td></tr>
     
	<tr><td><?php 
     echo "<h4>Estado </h4><td><h4>$retorno[5] </h4></td>";
     ?></h4>
     </td></tr>
        

	</tbody>
	</table></td><td>
     <table border="0" align="right">
     <tbody>
     
      <tr>
        <td><h4>Luz escalera</h4></td>
        <td><input type="submit" value="On" name="escaleraON">
        <?php
                if (isset($_REQUEST['escaleraON'])) {
                       orden('199');
                       $es0='1';
                }
                ?>
        </td>                                                                                  
        <td><input type="submit" value="Off" name="escaleraOFF">
        <?php
                if (isset($_REQUEST['escaleraOFF'])) {
                        orden('198');
                        $es0='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[0] == '1'||$es0=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } 
             elseif ($estado[0] == '0'||$es0=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
             }
                ?>
                </td>
                </tr>
                                                        
        <tr><td><h4>Luz salon</h4></td>
        <td><input type="submit" value="On" name="salonON">
        <?php
                if (isset($_REQUEST['salonON'])) {
                       orden(111);
                       $es1='1';
                       
                }
                ?>
        </td>                                                                                  
        <td><input type="submit" value="Off" name="salonOFF">
        <?php
                if (isset($_REQUEST['salonOFF'])) {
                        orden(110);
                        $es1='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[1] == '1'||$es1=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[1] == '0'||$es1=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                 <tr><td><h4>Luz Pasillo</h4></td>
        <td>
        <input type="submit" value="On" name="pasilloON">
        <?php
                if (isset($_REQUEST['pasilloON'])) {
                        orden(121);
                        $es2='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="pasilloOFF">
        <?php
                if (isset($_REQUEST['pasilloOFF'])) {
                        orden(120);
                        $es2='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[2] == '1'||$es2=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[2] == '0'||$es2=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                 <tr><td><h4>Luz cocina</h4></td>
        <td>
        <input type="submit" value="On" name="cocinaON">
        <?php
                if (isset($_REQUEST['cocinaON'])) {
                        orden(131);
                        $es3='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="cocinaOFF">
        <?php
                if (isset($_REQUEST['cocinaOFF'])) {
                        orden(130);
                        $es3='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[3] == '1'||$es3=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[3] == '0'||$es3=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Patio</h4></td>
        <td>
        <input type="submit" value="On" name="PatioON">
        <?php
                if (isset($_REQUEST['PatioON'])) {
                        orden(141);
                        $es4='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="PatioOFF">
        <?php
                if (isset($_REQUEST['PatioOFF'])) {
                        orden(140);
                        $es4='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[4] == '1'||$es4=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[4] == '0'||$es4=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <td><h4>Hab. matrimonio</h4></td>
        <td>
        <input type="submit" value="On" name="HabmatON">
        <?php
                if (isset($_REQUEST['HabmatON'])) {
                        orden(151);
                        $es5='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="HabmatOFF">
        <?php
                if (isset($_REQUEST['HabmatOFF'])) {
                        orden(150);
                        $es5='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[5] == '1'||$es5=='0') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[5] == '0'||$es5=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Hab. 1</h4></td>
        <td>
        <input type="submit" value="On" name="hab1ON">
        <?php
                if (isset($_REQUEST['hab1ON'])) {
                        orden(161);
                        $es6='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="hab1OFF">
        <?php
                if (isset($_REQUEST['hab1OFF'])) {
                        orden(160);
                        $es6='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[6] == '1'||$es6=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[6] == '0'||$es6=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Hab. 2</h4></td>
        <td>
        <input type="submit" value="On" name="hab2ON">
        <?php
                if (isset($_REQUEST['hab2ON'])) {
                        orden(171);
                        $es7='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="hab2OFF">
        <?php
                if (isset($_REQUEST['hab2OFF'])) {
                        orden(170);
                        $es7='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[7] == '1'||$es7=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[7] == '0'||$es7=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Hab. 3</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="hab3ON">
        <?php
                if (isset($_REQUEST['hab3ON'])) {
                        orden(181);
                        $es8='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="hab3OFF">
        <?php
                if (isset($_REQUEST['hab3OFF'])) {
                        orden(180);
                        $es8='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[8] == '1'||$es8=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[8] == '0'||$es8=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Garaje</h4></td>
        <td>
        <input type="submit" value="On" name="GarajeON">
        <?php
                if (isset($_REQUEST['GarajeON'])) {
                        orden(191);
                        $es9='1';
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Off" name="GarajeOFF">
        <?php
                if (isset($_REQUEST['GarajeOFF'])) {
                        orden(190);
                        $es9='0';
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[9] == '1'||$es9=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[9] == '0'||$es9=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                </tbody>

	</table></td>
 <FORM>
       


        <table border="0" align="center">
        <tbody>
        
                                                    
     <tr>
     <td><h4>Interruptores </h4></td>
     <td><INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginageneral1.php'"></td>
        <td>
	        <div class='naranja-circle'>	
	        <div class='glare'></div></div></td>
        <td>
      </tr>

	<tr>
     <td>
     <h4>Estacion Meteorologica</h4>
     </td>
     <td>
        <input type="submit" value="Entrar" onClick="parent.location='paginasensores.php'">
     </td>                                                                                  
        <td>
	        <div class='naranja-circle'>	
	        <div class='glare'></div></div></td>
        <td>
        </tr>
	
<tr>
     <td>
     <h4>Puertas, ventanas y calefacción</h4>
     </td>
     <td>
        <input type="submit" value="Entrar" onClick="parent.location='paginapuerta.php'">
     </td>                                                                                
        <td>
	        <div class='naranja-circle'>	
	        <div class='glare'></div></div></td>
        <td>
        </tr>

	<tr>
     <td>
     <h4>Alarmas</h4>
     </td>
     <td>
        <input type="submit" value="Entrar" onClick="parent.location='paginalarma.php'">
     </td>                                                                                  
        <td>
	        <div class='naranja-circle'>	
	        <div class='glare'></div></div></td>
        <td>
        </tr>
	
	<tr>
     <td>
     <h4>Todo</h4>
     </td>
     <td>
     <INPUT TYPE="button" VALUE="Entrar" onClick="parent.location='paginageneral.html'">
     </td>                                                                                  

    <td>
	        <div class='naranja-circle'>	
	        <div class='glare'></div></div></td>
        <td>
        </tr>


	</tbody>
	</table>
	   <table border="0" align="center">
        <tbody>
                                                            
    

<tr><td><h4>Puerta del Garaje</h4></td>
        <td>
        <input type="submit" value="Abrir" name="GarajeAB">
        <?php
                if (isset($_REQUEST['GarajeAB'])) {
                        orden(221);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Cerrar" name="GarajeCE">
        <?php
                if (isset($_REQUEST['GarajeCE'])) {
                        orden(220);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[10] == '1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[10] == '0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                
<tr><td><h4>Persiana Salon</h4></td>
        <td>
        <input type="submit" value="Subir" name="persu">
        <?php
                if (isset($_REQUEST['persu'])) {
                        orden(223);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Bajar" name="perba">
        <?php
                if (isset($_REQUEST['perba'])) {
                        orden(222);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[11] == '1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[11] == '0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
<tr><td><h4>Persiana Hab. principal</h4></td>
        <td>
        <input type="submit" value="Subir" name="persu1">
        <?php
                if (isset($_REQUEST['persu1'])) {
                        orden(225);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Bajar" name="perba1">
        <?php
                if (isset($_REQUEST['perba1'])) {
                        orden(224);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[12] == '1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[12] == '0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>    
                
<tr><td><h4>Calefaccion</h4></td>
        <td>
        <input type="submit" value="Encender" name="caleon">
        <?php
                if (isset($_REQUEST['caleon'])) {
                        orden(231);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Apagar" name="caleoff">
        <?php
                if (isset($_REQUEST['caleoff'])) {
                        orden(230);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[13] == '1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[13] == '0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
<tr><td><h4>Aire acondicionado</h4></td>
        <td>
        <input type="submit" value="Encender" name="aireon">
        <?php
                if (isset($_REQUEST['aireon'])) {
                        orden(233);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Apagar" name="aireoff">
        <?php
                if (isset($_REQUEST['aireoff'])) {
                        orden(232);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[14] == '1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[14] == '0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>



	
	</tbody>
	</table>
  <table border="0" align="right">
        <tbody>
                                                            
     	

<tr><td><h4>Alarma</h4></td>
        <td>
        <input type="submit" value="Activar Alarma" name="AlarmaON">
        <?php
                if (isset($_REQUEST['AlarmaON'])) {
                        orden(251);
                }
                ?>
        </td>                                                                                  
        <td>
        <input type="submit" value="Desactivar Alarma" name="AlarmaOFF">
        <?php
                if (isset($_REQUEST['AlarmaOFF'])) {
                        orden(250);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[15] == '1') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[15] == '0') {
                        echo "<div class='azul-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>



	
	</tbody>
	</table>
	</FORM>
 <div>
          <h4 align="center">
        <input type=button onClick="location.href='paginaindice.php'" value='Volver'>
	
        <input type=button onClick="location.href='index.php'" value='Salir'>

        <input type=button onClick="location.href='paginageneral.php'" value='Actualizar'>
	</h4></div>
	<!--<tr>
         <h3 align="center">
		Proyecto fin de curso ASIR 
	<br>
		&copy; Autores - Esteban Vicario y Jose Garcia
	<br> 
	Spain - Abril - 2022 - (rev)
	</h3>
	</tr>-->
	</div>
	</div>
        </form>
     </body>
   </html> 
