<html>
<head>
	<title>Agenda telefonica.</title>
	<link rel="stylesheet" href="css.css">
<script src="Codigo.js"></script>


</head>

<body>


<h1 id = "inicio">Agenda telefonica</h1>

<div id = "parteAgregar">
<form action="agregar.php" method="post" enctype="application/x-www-form-urlencoded">
	<p>
	Añade tus datos
	</p>
	<table>
		<tr>
			<td>Nombre: <input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Apellido: <input type="text" name="apellido"></td>
		</tr>
		<tr>
			<td>Numero de Casa: <input type="text" name="casa"></td>
		</tr>
		<tr>
			<td>Numero de Trabajo: <input type="text" name="trabajo"></td>
		</tr>
		<tr>
			<td>Correo electronico principal: <input type="text" name="correo"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Aceptar" /></td>
		</tr>
	</table>
</form>
</div>

<div id = "parteBorrar">
<form action="borrar.php" method="post" enctype="application/x-www-form-urlencoded">
	<h1>Eliminar contacto por nombre: <input type="text" name="aborrar"></h1>
	<center>
<table>
	<tr>		
	<td><input type="submit" value="Borrar" /></td>
	</tr>
</table>
	</center>
</form>
</div>


<div id = "parteListar">
<form action="listar.php" method="post" enctype="application/x-www-form-urlencoded">
	
<table>
	<tr>		
	<td><input type="submit" value="Listar todos los contactos." /></td>
	</tr>
</table>
</form>
</div>

<div id="otro">

<form action="busqueda.php" method="post" enctype="application/x-www-form-urlencoded">
  Busqueda:<br>
  <input type="text" name="busqueda"><br>
  <input type="submit" value="Buscar" />
</form >
						

</div>

</body>
</html>