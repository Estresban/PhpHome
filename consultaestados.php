<?php 
include ('conexion.php');
	$query9 = "SELECT escalera,salon,pasillo,cocina,patio,matrimonio,hab1,hab2,hab3,garaje FROM estadosp2 WHERE fecha=(select (MAX(fecha)) from estadosp2 WHERE fecha)"; 
	$consulta = $mysqli->query($query9);
	$estaBBDD = $consulta->fetch_assoc();

$query10 = "SELECT est0,est1,est2,est3,est4,est5,est6,est7,est8,est9,est10 FROM estadosp1 WHERE fecha=(select (MAX(fecha)) from estadosp1 WHERE fecha)"; 
	$consulta = $mysqli->query($query10);
	$estaBBDD1 = $consulta->fetch_assoc();
 
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
    $motor1=$estaBBDD1['escalera'];
    $persiana1=$estaBBDD1['salon'];
    $persiana2=$estaBBDD['pasillo'];
    $aireacondicionado=$estaBBDD1['cocina'];
    $calefaccion=$estaBBDD1['patio'];
    $alarma=$estaBBDD1['matrimonio'];
    $hab1=$estaBBDD1['hab1'];
    $hab2=$estaBBDD1['hab2'];
    $hab3=$estaBBDD1['hab3'];
    $garaje=$estaBBDD1['garaje'];
    }
    //var_dump ($estaBBDD);
    ?>
1
