<?php

include("conexion.php");
		$fecha = Date("Y-m-d H:i:s");
		$query3 = "INSERT INTO meteorologia(id_usuario, humedad, indice, temperatura1, temperatura2,altitud,presion,luminosidad,fecha) VALUES ('$id_usuario','$humedad','$indice','$temp1','$temp2','$altitud','$presion','$lumi','$fecha')";
		$mysqli->query($query3);
?>
