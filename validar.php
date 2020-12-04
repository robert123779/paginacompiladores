<?php
$usuario=$_GET['usuario'];
$clave=$_GET['clave'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root","","bdprueba");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);	
if($filas>0){
	header("location:index.php");

}
else{
	echo"Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);