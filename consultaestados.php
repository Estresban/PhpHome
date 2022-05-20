<?php 
include ('conexion.php');
	$query9 = "SELECT escalera,salon,pasillo,cocina,patio,matrimonio,hab1,hab2,hab3,garaje FROM estadosp2 WHERE fecha=(select (MAX(fecha)) from estadosp2 WHERE fecha)"; 
	$consulta = $mysqli->query($query9);
	$estaBBDD = $consulta->fetch_assoc();
 
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
    //var_dump ($estaBBDD);
    ?>
