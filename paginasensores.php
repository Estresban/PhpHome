<?php
session_start();
include ('conexion.php');
include ('variables.php');
//include ('variables2.php');

sleep(1);

?>
<!DOCTYPE HTML>
<head>
	<title>Home Domotica</title>
		<meta name="description" content="Sensores">
                <link rel="stylesheet" href="css/text.css" type="text/css" media="all">
		<style type="text/css"></style>
</head>
                                                            
<body> 
	<div class="view">
	<div class="header-wrapper">
	<h1> Estacion meteorologica <?php include ('fecha.php');?></h1>
		</div>
		

		<div class="group-wrapper">
        <form><div></div>
        <table border="0" align="center">
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
	</table></form>
	<h4 align="center">
        <input type=button action='paginasensores.php' value='leer'>
	<input type=button action="<?php
	$fecha = Date("Y-m-d H:i:s");
	$query3 = "INSERT INTO meteo( humedad, indice, temperatura1, temperatura2, altitud, presion, lumenes, fecha) VALUES ('$retorno[0]','$retorno[1]','$retorno[2]','$retorno[3]','$retorno[4]','$retorno[6]','$retorno[5]','$fecha')";
	$mysqli->query($query3);
 $query5 = "INSERT INTO retornos(escalera, salon, pasillo, cocina, patio, matrimonio, hab1, hab2, hab3, garaje, motorpuerta, persiana1, persiana2, aire_acond, calefaccion, alarma, fecha) VALUES ('$estado[0]','$estado[1]','$estado[2]','$estado[3]','$estado[4]','$estado[5]','$estado[6]','$estado[7]','$estado[8]','$estado[9]','$estado[10]','$estado[11]','$estado[12]','$estado[13]','$estado[14]','$estado[15]','$fecha')";
	$mysqli->query($query5);
 $query6 = "INSERT INTO estadosp1(humedad, indice, temp1, temp2, altitud, lumenes, presion, estados, fecha) VALUES ('$retorno[0]','$retorno[1]','$retorno[2]','$retorno[3]','$retorno[4]','$retorno[5]','$retorno[6]','$retorno[7]','$fecha')";
	$mysqli->query($query6);
 $query6 = "INSERT INTO estadosp2(escalera, salon, pasillo, cocina, patio, matrimonio, hab1, hab2, hab3, garaje, fecha) VALUES ('$estado[0]','$estado[1]','$estado[2]','$estado[3]','$estado[4]','$estado[5]','$estado[6]','$estado[7]','$estado[8]','$estado[9]','$fecha')";
	$mysqli->query($query6);
	?>" value='guardar'>
 
	<input type=button action="<?php
	$comando='deslogueado';
  $id_comando='2';
	$query4 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros)VALUES (1,'$id_comando','$comando','$fecha','NULL')";
	$mysqli->query($query4);
	//session_destroy();
	//header("Location:index.php");
	?>" value='salir'>
 
 <input type=button action="paginaindice.php" value='volver'>
	
	</h4>
	
	
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
