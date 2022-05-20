<?php     

  include ("serial.php");
	sleep(1);
 

	$comando=211;
  fwrite($fcon,$comando);

	
  $retorno=fread($fcon,(75));

	$var = explode(',',$retorno);
	
	$̣_SESSION['humedad1']=$var[0];
	$̣_SESSION['indice1']=$var[1];
	$̣_SESSION['temp11']=$var[2];
	$̣_SESSION['temp21']=$var[3];
	$̣_SESSION['altitud1']=$var[4];
	$̣_SESSION['lum1']=$var[5];
	$̣_SESSION['presion1']=$var[6];
	$̣_SESSION['retorno11']=$var[7];
	$̣_SESSION['retorno21']=$var[8];

for ($i=0;$i<16;$i++){
		$estado2[$i]=(substr($var[7],$i,1));
		}
   
	fclose($fcon);
	//var_dump($estado2);
	//echo $̣_SESSION['retorno'];
?>
