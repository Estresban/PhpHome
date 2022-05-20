<?php     
    include ("serial.php");
    //sleep(1);
	$comando=210;
	fwrite($fcon,$comando);
	
  $retor=fread($fcon,(75));
sleep(1);
  $retorno=array ();
  $retorno=explode(',',$retor);
  
  $estado=array (16);

  for ($i=0;$i<16;$i++){
		$estado[$i]=(substr($retorno[7],$i,1));
		}
  //var_dump($estado);
  //var_dump($retorno);

	
	fclose($fcon);
?>
