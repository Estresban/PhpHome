<?php

include("conexion.php");

$fecha = date("Y-m-d H:i:s");
$id_usuario=1;//$_SESSION['id-usuario-logueado'];
$comando='deslogueado';
$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros)VALUES ('$id_usuario',2,'$comando','$fecha',NULL)";
$mysqli->query($query2);

//session_destroy();

//header("Location:index.php");

?>
