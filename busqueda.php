<?php
$busqueda=$_POST["busqueda"];

$consulta="SELECT * FROM contacto WHERE Nombre LIKE('%$busqueda%') or Apellido LIKE('%$busqueda%')";
$user="root";
$pass="pass";
$server="localhost";
$db="agendacompleta";

$link = mysql_connect($server,$user,$pass); 
mysql_select_db($db, $link); 
$result = mysql_query($consulta, $link);
$encon = False;
while ($row = mysql_fetch_array($result)) {
	$encon = True;
	echo "<tr>";
	echo "---------CONTACTO ENCONTRADO---------";
	$im=$row["Nombre"];
	echo "<br>";
	echo "Nombre: " . $im;
	$ape=$row["Apellido"];
	echo "<br>";
	echo "Apellido: " . $ape;
	$casa=$row["Casa"];
	echo "<br>";
	echo "Telefono de casa: " . $casa;
	$tra=$row["Trabajo"];
	echo "<br>";
	echo "Telefono de trabajo: " . $tra;
	$correo=$row["Correo"];
	echo "<br>";
	echo "Correo: " . $correo;
	echo "<br>";

echo "</tr>";
}
if($encon == False){
	echo "No se encontraron coincidencias.";
}
?>
<html>
<head>
	<title>Contactos encontrados</title>
</head>
<body><a href="Agenda.php"> Haz click aqui para volver.</a>

</body>
</html>