<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$departamento = $_POST['departamento'];
$cargo = $_POST['cargo'];
$anexo = $_POST['anexo'];

echo "Patron de Busqueda: ";
echo "$nombre";
echo "$apellido";
echo "$usuario";
echo "$departamento";
echo "$cargo";
echo "$anexo";

$p=0;
if($nombre!=""){$p=1;} 
if($apellido!=""){$p=2;}
if($usuario!=""){$p=3;}
if($departamento!=""){$p=4;}
if($cargo!=""){$p=5;} 
if($anexo!=""){$p=6;} 
if($nombre!="" && $apellido!=""){$p=7;}
if($nombre!="" && $usuario!=""){$p=8;} 
if($nombre!="" && $departamento!=""){$p=9;}
if($nombre!="" && $cargo!=""){$p=10;}
if($nombre!="" && $anexo!=""){$p=11;}
if($apellido!="" && $usuario!=""){$p=12;}
if($apellido!="" && $departamento!=""){$p=13;}
if($apellido!="" && $cargo!=""){$p=14;}
if($usuario!="" && $departamento!=""){$p=15;}

switch($p){

	case 0:
		$consulta = "SELECT * FROM colaborador";
		echo " TODOS ";
		break;

	case 1:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre'";
		echo " nombre";
		break;

	case 2:
		$consulta = "SELECT * FROM colaborador where apellido_1 = '$apellido'";
		echo " apellido";
		break;

	case 3:
		$consulta = "SELECT * FROM colaborador where usuario = '$usuario"."@duoc.cl"."'";
		echo " usuario";
		break;

	case 4:
		$consulta = "SELECT * FROM colaborador where departamento = '$departamento'";
		echo " departamento";
		break;

	case 5:
		$consulta = "SELECT * FROM colaborador where cargo = '$cargo'";
		echo " cargo";
		break;

	case 6:
		$consulta = "SELECT * FROM colaborador where anexo = $anexo";
		echo " anexo";
		break;

	case 7:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre' AND apellido_1 = '$apellido'";
		echo " nombre apellido";
		break;

	case 8:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre' AND usuario = '$usuario"."@duoc.cl"."'";
		echo " nombre usuario";
		break;

	case 9:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre' AND departamento = '$departamento'";
		echo " nombre departamento";
		break;

	case 10:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre' AND cargo = '$cargo'";
		echo " nombre cargo";
		break;

	case 11:
		$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre' AND anexo = '$anexo'";
		echo " nombre anexo";
		break;

	case 12:
		$consulta = "SELECT * FROM colaborador where apellido_1 = '$apellido' AND usuario = '$usuario"."@duoc.cl"."'";
		echo " apellido departamento";
		break;

	case 13:
		$consulta = "SELECT * FROM colaborador where apellido_1 = '$apellido' AND departamento = '$departamento'";
		echo " apellido departamento";
		break;

	case 14:
		$consulta = "SELECT * FROM colaborador where apellido_1 = '$apellido' AND cargo = '$cargo'";
		echo " nombre apellido";
		break;

	case 15:
		$consulta = "SELECT * FROM colaborador where usuario = '$usuario"."@duoc.cl' AND departamento = '$departamento'";
		echo " nombre apellido";
		break;
}

if($conexion)
{

	//echo "hay conexion";

	if(isset($_POST['nombre']))
	{
		//echo "llego el nombre";

        	//$consulta = "SELECT * FROM colaborador where nombre_1 = '$nombre'";
        	$ejecucion = mysqli_query($conexion, $consulta);


		while($fila = mysqli_fetch_array($ejecucion))
		{
			$nombre = $fila['nombre_1'];
			$apellido = $fila['apellido_1'];
			$usuario = $fila['usuario'];
			$departamento = $fila['departamento'];
			$cargo = $fila['cargo'];
			$anexo = $fila['anexo'];


//		echo "".$nombre." ".$apellido." ".$usuario." ".$departamento." ".$cargo." ".$anexo;


?>
<!DOCTYPE html>
<html>
<head>
 <title>Busqueda canina</title>
<style>
        @import url("documento.css");
</style>

</head>

<body>
<br>
<div id="datos">
<div id="interno">
<div id="colordato">
	<label for="nombre">Nombre:</label>
	<span name="nombre"><?php echo $nombre." ".$apellido; ?></span>
</div>


<div>
	<label for="usuario">Usuario:</label>
	<span name="usuario"><?php echo $usuario; ?> </span>
</div>

<div id="colordato">
	<label for="departamento">Departamento:</label>
	<span name="departamento"><?php echo $departamento; ?></span>
</div>

<div>
	<label for="cargo">Cargo:</label>
	<span name="cargo"><?php echo $cargo; ?></span>
</div>

<div id="colordato">
	<label for="anexo">Anexo:</label>
	<span name="anexo"><?php echo $anexo; ?></span>
</div>

</div>
</div>
</div>
</body>
</html>
<?php

		}


	}


}
else
{ 
	echo "no se ha establecido conexion";
}

?>




