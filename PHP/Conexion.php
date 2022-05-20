<?php
	function Conectarse()
	{
		//parametros: servidor, usuario, contraseña, nombre de base de datos
		$link = mysqli_connect("localhost", "root", "root1234", "pagdoct");
		/* comprobar la conexión */
		if (mysqli_connect_errno()) //Si regresa un numero de error la condicion es verdadera, si regresa 0, no hay error y la condicion es falsa
		{
		    printf("Falló la conexión: %s\n", mysqli_connect_error());
		    exit();
		}
		return $link;
	}

?>