<?php
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
	
	<option value="Escuela de Administracion y negocios">Escuela de Administracion y negocios</option>
	<option value="Escuela de Informatica y telecomunicaciones">Escuela de Informatica y telecomunicaciones</option>
	<option value="Escuela de Construccion">Escuela de Construccion</option>
	<option value="Escuela de Ingenieria">Escuela de Ingenieria</option>
	<option value="Escuela de Recursos Naturales">Escuela de Recursos Naturales</option>
	<option value="Escuela de Salud">Escuela de Salud</option>
	<option value="Marketing">Marketing</option>
	<option value="DAE">DAE</option>
	<option value="Caja">Caja</option>
	<option value="Coordinacion Docente">Cordinacion Docente</option>
	<option value="CETECOM">CETECOM</option>
	<option value="Biblioteca">Biblioteca</option>
	<option value="DARA">DARA</option>
	<option value="Coordinacion de Lenguaje y Comunicacion">Coordinacion de Lenguaje y Comunicacion</option>
	<option value="Coordinacion de Matematica">Coordinacion de Matematica</option>
	<option value="Coordinacion de Matematica">Coordinacion de Etica</option>
	<option value="Coordinacion de Matematica">Coordinacion de Ingles</option>
	<option value="Coordinacion de Matematica">Coordinacion de Emprendimiento</option>


	</select>
<br><br>

	<label for="anexo">Anexo :&nbsp; </label>
	<input type="number" name="anexo" id="anexo">
<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;	<input type="submit" value="ingresar">

</div>
</body>
</html>

