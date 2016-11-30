<?php
$nombre=$_POST['aborrar'];

$consulta="DELETE FROM contacto WHERE Nombre='$nombre'";
	$user="root";
	$pass="pass";
	$server="localhost";
	$db="agendacompleta";

	$link = mysql_connect($server,$user,$pass); 
	mysql_select_db($db, $link); 
	$result = mysql_query($consulta, $link);
	if($result){
		header("Location:borrado.php");
	}else{
		echo "No borrado";
	}


?>