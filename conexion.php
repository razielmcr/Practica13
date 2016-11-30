<?php

function conectar(){
	$user="root";
	$pass="pass";
	$server="localhost";
	$db="agendacompleta";

	$con=mysql_connect($server,$user,$pass) or die ("No se pudo".mysql_error());
	$selected=mysql_select_db($db,$con);

	return $selected;
}
?>