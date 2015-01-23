function validaciones(datos)
{
	if(datos.nombre.value.length==0)
	{
		datos.nombre.focus();
		alert('Ingrese el nombre por favor');
return false;
	}

	if(datos.apellido.value.length==0)
	{
		datos.apellido.focus();
		alert('Ingrese el apellido por favor');
	}
}
