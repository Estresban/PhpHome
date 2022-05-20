<?php  
//   
    function orden(int $comando){
    include ("serial.php");
 
	fwrite($fcon,$comando);
	//sleep(1);

	fclose($fcon);
	}
	//orden (141);

?>
