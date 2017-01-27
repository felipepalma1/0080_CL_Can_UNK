<?php
include("conexion.php");

$nombre_1 = $_POST['nombre_1'];
$apellido_1 = $_POST['apellido_1'];
$usuario = $_POST['usuario']."@duoc.cl";
$departamento = $_POST['departamento'];
$cargo = $_POST['cargo'];
$anexo = (int) $_POST['anexo'];

$conexion = mysqli_connect($host,$user,$pw);
	mysqli_select_db($conexion,$db);
if($conexion)
{
echo "$nombre_1";
echo "$apellido_1";
echo "$usuario";
echo "$departamento";
echo "$cargo";
echo "$anexo";


if(!mysqli_query($conexion,"INSERT INTO colaborador VALUES('$anexo','$nombre_1','$apellido_1','$departamento','$cargo','$usuario')"))
{
	$errno = mysqli_errno($conexion);
	mysqli_close($conexion); //cerrando base de datos

if($errno == 1062)
{
	echo "<center><h1>Error, ya existen estos datos</h1></center>";
	echo "<meta http-equiv='refresh' content='2;url=index.php'>";
}
}else{

mysqli_close($conexion); //cerrando base de datos
$datos_ingresados = "<h1>Datos ingresados</h1>";
echo "$datos_ingresados";
echo "<meta http-equiv='refresh' content='3;url=index.php'>";

}
	
	

}
?>
