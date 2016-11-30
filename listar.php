<?php

	$consulta="SELECT * FROM contacto";
	$user="root";
	$pass="pass";
	$server="localhost";
	$db="agendacompleta";

	$link = mysql_connect($server,$user,$pass); 
	mysql_select_db($db, $link); 
	$result = mysql_query($consulta, $link);
	while ($row = mysql_fetch_array($result)) {
    	echo "<tr>";
		echo "---------CONTACTO---------";
		$im=$row["Nombre"];
    	echo "<br>";
    	echo "Nombre: " . $im;
		$ape=$row["Apellido"];
    	echo "<br>";
    	echo "Apellido" . $ape;
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
?>