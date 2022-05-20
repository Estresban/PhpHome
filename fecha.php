<?php 

$diasemana = date("l");
if ($diasemana == 'Monday'){$diaesp='Lunes';}
elseif ($diasemana == 'Tuesday'){$diaesp='Martes';}
elseif ($diasemana == 'Wednesday'){$diaesp='Miercoles';}
elseif ($diasemana == 'Thursday'){$diaesp='Jueves';}
elseif ($diasemana == 'Friday'){$diaesp='Viernes';}
elseif ($diasemana == 'Saturday'){$diaesp='Sabado';}
elseif ($diasemana == 'Sunday'){$diaesp='Domingo';}
echo $diaesp." ";
echo date("d-m-Y");

?>
