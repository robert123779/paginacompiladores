<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	include('datosconex.php');
	$conexion=mysqli_connect($server,$usuario,$contra,$bd) or die("Error en la conexion");
	$nombre=$_POST['txtNombre'];
	$busqueda="SELECT * FROM datos WHERE NOMBRE LIKE '%$nombre%'";
	$consulta=mysqli_query($conexion,$busqueda) or die ("Error al consultar los datos!");
	echo"<table border='1'>";
	echo"<tr>";
	echo"<th id='clave'>Clave</th>";
	echo"<th id='nombre'>Nombre</th>";
	echo"<th id='sexo'>Sexo</th>";
	echo"</tr>";
	
	while($extrae=mysqli_fetch_array($consulta))
	{
		echo"<tr>";
		echo"<td>".$extrae['clave']."</td>";
		echo"<td>".$extrae['nombre']."</td>";
		echo"<td>".$extrae['sexo']."</td>";
		echo"<tr>";
		}
		mysqli_close($conexion);
		echo"</table>";


?>


</body>
</html>