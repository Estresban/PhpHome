<?php 
include ('conexion.php');
	$query9 = "SELECT escalera,salon,pasillo,cocina,patio,matrimonio,hab1,hab2,hab3,garaje FROM estadosp2 WHERE fecha=(select (MAX(fecha)) from estadosp2 WHERE fecha)"; 
	$consulta9 = $mysqli->query($query9);
	$estaBBDD = $consulta9->fetch_assoc();

$query10 = "SELECT est10,est11,est12,est13,est14,est15 FROM retornos WHERE fecha=(select (MAX(fecha)) from estadosp1 WHERE fecha)"; 
	$consulta10 = $mysqli->query($query10);
	$estaBBDD1 = $consulta10->fetch_assoc();
 
 if($estaBBDD);{
    $escalera=$estaBBDD['escalera'];
    $salon=$estaBBDD['salon'];
    $pasillo=$estaBBDD['pasillo'];
    $cocina=$estaBBDD['cocina'];
    $patio=$estaBBDD['patio'];
    $matrimonio=$estaBBDD['matrimonio'];
    $hab1=$estaBBDD['hab1'];
    $hab2=$estaBBDD['hab2'];
    $hab3=$estaBBDD['hab3'];
    $garaje=$estaBBDD['garaje'];
    }
 
 if($estaBBDD1);{
    $motor1=$estaBBDD1['est10'];
    $persiana1=$estaBBDD1['est11'];
    $persiana2=$estaBBDD['est12'];
    $aireacondicionado=$estaBBDD1['est13'];
    $calefaccion=$estaBBDD1['est14'];
    $alarma=$estaBBDD1['est15'];
    }
    //var_dump ($estaBBDD);
    ?>
1
