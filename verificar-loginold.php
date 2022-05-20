<?php
//echo "Hola";
include("conexion.php");
$usuario=$_POST['usuario-inicio'];
$pass=$_POST['password-inicio'];
$hashed=hash("sha512",$pass);
//echo '<script language="javascript">';
//echo 'alert("$hashed")';
//echo '</script>';

if(isset($_POST['boton-inicio-confirmar'])){
	$passwordCifrada==$hashed;
	$query = "SELECT * FROM usuarios WHERE alias='$usuario'"; 
	$resul = $mysqli->query($query);
	$registro = $resul->fetch_assoc();	
	
	if($passwordCifrada==$registro['pass']);
		$_SESSION['id-usuario-logueado']=$registro['id_usuario'];
		//$_SESSION['usuario']=$registro['alias'];
		$_SESSION['mostrarPagina']=1;
		$fecha = Date("Y-m-d H:i:s");
		$file = fopen("txt/idUsuario.txt", "a");
		fwrite($file,"Inicio sesion.-". $usuario .'/     ID.-'.$_SESSION['id-usuario-logueado'].'/    el dia y a la hora'. $fecha."/n/r" );
		fclose($file);
		
		
		$id_usuario=$_SESSION['id-usuario-logueado'];
		$comando='logueado';
		$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros) VALUES ('$id_usuario',1,'$comando','$fecha',NULL)";
		$mysqli->query($query2);
		
		header("Location: ./paginaindice.php");

		
	}	
	else{
	
		header("Location: ./index.php");
	}





?>
