<?php

    //$puerto ="COM4";
    $puerto = "/dev/ttyUSB0";
    $permiso = "r+";
	$Sercon = fopen ($puerto, $permiso);
        //if (!$Sercon) {$_SESSION['estacon'] = "0";} 
	      //else {$_SESSION['estacon'] = "1";}
	
        if (!$Sercon) { $estacon = "0";} 
	    	else {$estacon = "1";}
	sleep(1);
 
?>
