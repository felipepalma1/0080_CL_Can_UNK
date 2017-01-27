<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	@import url("documento.css");
</style>
</head>
<body>

<div id="table">
<form action="search.php" method="post">
<div>
<label for="nombre">nombre</label>
<input type="text" name="nombre">
</div>

<div>
<label for="apellido">Apellido</label>
<input type="text" name="apellido">
</div>

<div>
<label for="usuario">Usuario</label>
<input type="text" name="usuario">
</div>

<div>
<label for="departamento">Departamento</label>
<select name="departamento" id="departamento">
	<option value="" selected>Seleccione depto</option>
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


</div>

<div>
<label for="cargo">Cargo</label>
<input type="text" name="cargo">
</div>

<div>
<label for="anexo">Anexo</label>
<input type="text" name="anexo">
</div>

<div>
<br>
<input type="submit" name="buscar" value="Buscar">
</div>
</form>
</div>


<div>
<?php include('search_.php')?>
</div>



</body>
</html>


<?php



?>


