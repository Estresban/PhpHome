<?php
	include("conexion.php");
        //include("controlador/serial.php");
        require("php_serial.class.php");
        
        $puerto ="/dev/ttyUSB0";
        $serial = new phpSerial;
        $serial->deviceSet($puerto);
        $serial->confBaudRate(9600);
        $serial->confParity("none");
        $serial->confCharacterLength(8);
        $serial->confStopBits(1);
        $serial->confFlowControl("none");

        ?>
