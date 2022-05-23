<?php

include("conexion.php");

$fecha = date("Y-m-d H:i:s");
$id_usuario=$_SESSION['id-usuario-logueado'];
$comando='deslogueado';
$id_comando='2';
$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros)VALUES ('$id_usuario',$id_comando,'$comando','$fecha',NULL)";
$mysqli->query($query2);

session_destroy();
header("Location:index.php");

?>
