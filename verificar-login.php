<?php
session_start(); 
include("conexion.php");
$usuario=$_POST['usuario-inicio'];
$pass=$_POST['password-inicio'];
$hashed=hash("sha512",$pass);

if(isset($_POST['boton-inicio-confirmar'])){
	$query = "SELECT * FROM usuarios WHERE alias='$usuario'"; 
	$resul = $mysqli->query($query);
	$registro = $resul->fetch_assoc();	}
		if($hashed==$registro['pass']){
		$_SESSION['id-usuario-logueado']=$registro['id_usuario'];
		$_SESSION['usuario-logueado']=$registro['alias'];
		$_SESSION['usuario']=$registro['usuario'];
		$_SESSION['email']=$registro['email'];
		$fecha = Date("Y-m-d H:i:s");
		$file = fopen("html/txt/idUsuario.txt", "a+");
		fwrite($file,"Inicio sesion.-".$_SESSION['usuario-logueado'] .'/     ID.-'.$_SESSION['id-usuario-logueado'].'/    el dia y a la hora'. $fecha."/n/r" );
		fclose($file);
		$id_usuario=$_SESSION['id-usuario-logueado'];
		$comando='logueado';
		$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros) VALUES ('$id_usuario',1,'$comando','$fecha',NULL)";
		$mysqli->query($query2);
				header("Location: ./paginaindice.php");
	}	
	else {	header("Location: ./index.php");	}
?>
