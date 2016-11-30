<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$casa=$_POST['casa'];
$trabajo=$_POST['trabajo'];
$correo=$_POST['correo'];

$consulta="INSERT INTO contacto(Nombre, Apellido, Casa, Trabajo, Correo) VALUES ('$nombre','$apellido','$casa','$trabajo','$correo')";

	$user="root";
	$pass="pass";
	$server="localhost";
	$db="agendacompleta";

	$link = mysql_connect($server,$user,$pass); 
	mysql_select_db($db, $link); 
	$result = mysql_query($consulta, $link);
	if($result){
		header("Location:agregado.php");
	}else{
		echo "No agregado, verifica que: Los telefonos solo sean numeros enteros";
	}


?>