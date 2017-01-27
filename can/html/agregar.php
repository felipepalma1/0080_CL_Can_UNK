<?php
$opcion = $_POST['opcion'];
if($opcion=="Entrar"){ echo "hola";}else{ echo "chao"; }
?>
<!Doctype Html>
<html>
<head>
<title>IngresoCAN</title>
<link rel="StyleSheet" href="documento.css" type="text/css" media="all">
<script type="text/javascript" src="validaciones.js">
</script>
<head>
<body>
<div id="divTabla" name="divTablita">
<form action="ingreso.php" method="POST" onsubmit="return validaciones(this);">
	<label for="nombre">Primer Nombre :&nbsp; </label>
	<input type="text" id="nombre_1" name="nombre_1">
<br><br>

	<label for="apellido_1">Primer Apellido :&nbsp; </label>
	<input type="text" name="apellido_1" id="apellido_1">
<br><br>

	<label for="usuario">Nombre de Usuario :&nbsp; </label>
	<input type="text" name="usuario" id="usuario">
<br><br>

	<label for="departamento">Departamento:&nbsp; </label>
	<select name="departamento" id="departamento">
	
	<option value="Direccion">Direccion</option>
        <option value="Departamento Administrativo">Departamento Administrativo</option>
        <option value="DARA">DARA</option>
        <option value="Recepcion de Coordinadores">Recepcion de Coordinadores</option>
        <option value="Biblioteca">Biblioteca</option>
        <option value="CETECOM">CETECOM</option>
        <option value="Recepcion">Recepcion</option>
        <option value="Marketing">Marketing</option>
        <option value="DAE">DAE</option>
        <option value="Casino">Casino</option>
        <option value="Caja">Caja</option>
        <option value="Coordinacion Docente">Coordinacion Docente</option>
        <option value="Servicios Generales">Servicios Generales</option>
        <option value="Direccion de Escuelas">Direccion de Escuelas</option>
        <option value="Escuela de Salud">Escuela de Salud</option>
        <option value="UAP">UAP</option>
        <option value="Centro Fotocopiado">Centro Fotocopiado</option>
        <option value="Primeros Auxilios">Primeros Auxilios</option>
        <option value="Escuela de Ingenieria">Escuela de Ingenieria</option>
        <option value="Escuela de Construccion">Escuela de Construccion</option>	
	<option value="Escuela de RRNN">Escuela de RRNN</option>
	<option value="CITT">CITT</option>	


	</select>
<br><br>
	<label for="cargo">Cargo:&nbsp;</label> 
	<input type="text" name="cargo" id="cargo">
<br><br>

	<label for="anexo">Anexo :&nbsp; </label>
	<input type="number" name="anexo" id="anexo">
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;	<input type="submit" value="ingresar">

</div>
</body>
</html>

