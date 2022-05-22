<?php

    //$puerto ="COM4";
    $puerto = "/dev/ttyUSB0";
    $permiso = "r+";
        //if (!$conect) {$_SESSION['estacon'] = "0";} 
	      //else {$_SESSION['estacon'] = "1";}
	
 	$fcon = fopen ($puerto, $permiso);
        if (!$fcon) { $estacon = "0";} 
	    	else {$estacon = "1";}
	sleep(1);
 
?>
