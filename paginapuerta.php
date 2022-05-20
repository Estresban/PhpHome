<?php
	include("conexion.php");
	//include("variables.php");
   include ("ordenes.php");
        
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
	<h1> Control de puerta </h1>
	</div>

	<div class="group-wrapper">
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        


        <table border="0" align="center">
        <tbody>
                                                            
     <tr>
     <td>
     <h4></h4>
     </td>                                                                                
     <td><h4><?php ;?></td>
       
     <td>
     <h4></h4>
     </td>
     <td><h4><?php ;?></td>
</tr>	

<tr><td><h4>Puerta del Garaje</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="Abrir" name="GarajeAB">
        <?php
                if (isset($_REQUEST['GarajeAB'])) {
                        orden(221);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Cerrar" name="GarajeCE">
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
        <INPUT TYPE="submit" VALUE="Subir" name="persu">
        <?php
                if (isset($_REQUEST['persu'])) {
                        orden(223);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Bajar" name="perba">
        <?php
                if (isset($_REQUEST['perba'])) {
                        orden(222);
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
<tr><td><h4>Persiana Hab. principal</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="Subir" name="vensu1">
        <?php
                if (isset($_REQUEST['vensu1'])) {
                        orden(225);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Bajar" name="venba1">
        <?php
                if (isset($_REQUEST['venba1'])) {
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
        <INPUT TYPE="submit" VALUE="Encender" name="caleon">
        <?php
                if (isset($_REQUEST['caleon'])) {
                        orden(231);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Apagar" name="caleoff">
        <?php
                if (isset($_REQUEST['caleoff'])) {
                        orden(230);
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
<tr><td><h4>Aire acondicionado</h4></td>
        <td>
        <INPUT TYPE="submit" VALUE="Encender" name="aireon">
        <?php
                if (isset($_REQUEST['aireon'])) {
                        orden(233);
                }
                ?>
        </td>                                                                                  
        <td>
        <INPUT TYPE="submit" VALUE="Apagar" name="aireoff">
        <?php
                if (isset($_REQUEST['aireoff'])) {
                        orden(232);
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
	Spain - Abril 2022
	</h3>
	</tr>
	</div>
	</div>
     </body>
   </html> 
