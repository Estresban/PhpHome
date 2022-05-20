<?php

    //$puerto ="COM4";
    $puerto = "/dev/ttyUSB0";
    $permiso = "r+";
        //if (!$conect) {$_SERVER['estacon'] = "0";} 
	      //else {$_SERVER['estacon'] = "1";}
	
 	$fcon = fopen ($puerto, $permiso);
        if (!$fcon) { $estacon = "0";} 
	    	else {$estacon = "1";}
	sleep(1);
 
?>
