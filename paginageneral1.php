<?php
        session_start();
	include("conexion.php");
        //include("serial.php");
       include("consultaestados.php");
       //include("variables.php");
        
        include ("ordenes.php");

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
        <form method="post" action="">
	<div class="view">
	  <div class="header-wrapper">
	  <h1>Proyecto</h1>     
	  </div>

	<div class="group-wrapper">
  
     <table border="0" align="center">
     <tbody>
     
        <td><h4>Luz escalera</h4></td>
        <td><INPUT type="submit" value="On" name="escaleraON">
        <?php
                if (isset($_REQUEST['escaleraON'])) {
                       orden('101');
                }
                ?>
        </td>                                                                                  
        <td><INPUT TYPE="submit" VALUE="Off" name="escaleraOFF">
        <?php
                if (isset($_REQUEST['escaleraOFF'])) {
                        orden('100');
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[0] == '1'||$escalera =='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } 
             elseif ($estado[0] == '0'||$escalera=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
             }
                ?>
                </td>
                </tr>
                                                        
        <tr><td><h4>Luz salon</h4></td>
        <td><INPUT type="submit" value="On" name="salonON">
        <?php
                if (isset($_REQUEST['salonON'])) {
                       orden(111);
                       
                }
                ?>
        </td>                                                                                  
        <td><INPUT TYPE="submit" VALUE="Off" name="salonOFF">
        <?php
                if (isset($_REQUEST['salonOFF'])) {
                        orden(110);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[1] == '1'||$salon=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[1] == '0'||$salon=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                 <tr><td><h4>Luz Pasillo</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="pasilloON">
        <?php
                if (isset($_REQUEST['pasilloON'])) {
                        orden(121);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="pasilloOFF">
        <?php
                if (isset($_REQUEST['pasilloOFF'])) {
                        orden(120);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[2] == '1'||$pasillo=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[2] == '0'||$pasillo=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                 <tr><td><h4>Luz cocina</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="cocinaON">
        <?php
                if (isset($_REQUEST['cocinaON'])) {
                        orden(131);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="cocinaOFF">
        <?php
                if (isset($_REQUEST['cocinaOFF'])) {
                        orden(130);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[3] == '1'||$cocina=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[3] == '0'||$cocina=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz escalera</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="escaleraON">
        <?php
                if (isset($_REQUEST['escaleraON'])) {
                        orden(141);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="escaleraOFF">
        <?php
                if (isset($_REQUEST['escaleraOFF'])) {
                        orden(140);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[4] == '1'||$patio=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[4] == '0'||$patio=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <td><h4>Hab. matrimonio</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="HabmatON">
        <?php
                if (isset($_REQUEST['HabmatON'])) {
                        orden(151);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="HabmatOFF">
        <?php
                if (isset($_REQUEST['HabmatOFF'])) {
                        orden(150);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[5] == '1'||$matrimonio=='0') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[5] == '0'||$matrimonio=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Hab. 1</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="hab1ON">
        <?php
                if (isset($_REQUEST['hab1ON'])) {
                        orden(161);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="hab1OFF">
        <?php
                if (isset($_REQUEST['hab1OFF'])) {
                        orden(160);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[6] == '1'||$hab1=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[6] == '0'||$hab1=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Hab. 2</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="hab2ON">
        <?php
                if (isset($_REQUEST['hab2ON'])) {
                        orden(171);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="hab2OFF">
        <?php
                if (isset($_REQUEST['hab2OFF'])) {
                        orden(170);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[7] == '1'||$hab2=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[7] == '0'||$hab2=='0') {
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
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="hab3OFF">
        <?php
                if (isset($_REQUEST['hab3OFF'])) {
                        orden(180);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[8] == '1'||$hab3=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[8] == '0'||$hab3=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                <tr><td><h4>Luz Garaje</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="On" name="GarajeON">
        <?php
                if (isset($_REQUEST['GarajeON'])) {
                        orden(191);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Off" name="GarajeOFF">
        <?php
                if (isset($_REQUEST['GarajeOFF'])) {
                        orden(190);
                }
                ?>
        </td>
        <td>
        <?php
             if ($estado[9] == '1'||$garaje=='1') {
                        echo "<div class='green-circle'><div class='glare'></div>";
                        echo "</td>";
                } elseif ($estado[9] == '0'||$garaje=='0') {
                        echo "<div class='red-circle'><div class='glare'></div>";
                        echo "</td>";
                        
                }
                ?>
                </td>
                </tr>
                </tbody>

	</table></td>

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
