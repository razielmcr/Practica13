<?php
$user="root";
$pass="pass";
$server="localhost";
$db="agendacompleta";

	$link = mysql_connect($server,$user,$pass); 
	mysql_select_db($db, $link); 
}
?>