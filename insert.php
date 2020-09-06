
<?php

//  require_once palabra reservada, nos sirve para llamar archivos php
	require_once("conexion.php");


	// pequeña validacion del servidor, palabra reservada isset que significa si existe 
     /*Estamos preguntando en el condicionante, que si esxiste la variable post
     con el input, nombre, apellido, etc... entonces que me haga la siguiente accion, es decir en caso que existan me haga la insercion
     */
     // aca comienza la tabla cliente
	if (
		
		isset($_POST["nombre"]) &&
		isset($_POST["fechaactualizacion"]) &&
		

			// esta es otra tabla llamado estados

		isset($_POST["estados"]) 
		


// en caso que no existan pasaraia a este nivel y no se ejecuta la accion es decir un insert

	){
// nuestra tabla , que no se ejecute la accion,en este caso un insert
		// nuestra tabla usuarios depende de nuestra tabla direccion,es decir
		// tenemos que ingresar primero en nuestra tabla direccion y despues en nuestra tabla usuario, sino nos maracaria un error
		// los pongo en comillas simple y doble porque le estoy especificando texto
		// en los input o caja de texto

		// aca comienza tabla estados
		$mysqli ->query("INSERT INTO 
					estados(
						estados
						
					)
					VALUES(
						'".$_POST["estados"]." '
						

					)




			");

		// ahora hacemos uso de nuestro objeto mysqli, HACEMOS OTRO INSERT EN FORMA SEPARADA
		// y pasamos nuestra llave foranea direccion_id_direccion
		/* y le decimos que la informacion que venga de nuestra tabla direccion lo guarde
		en la tabla usuario y se imprima a la misma vez
		edad va en comillas doble nada mas porque es numero*/ 

		// aca comienza tabla cliente
		 $mysqli->query("INSERT INTO 
		 		cliente(

		 			nombre,
		 			fechaactualizacion,

		 			estados_id
		 		)

		 		VALUES(
		 			'".$_POST["nombre"]."',
		 			'".$_POST["fechaactualizacion"]."',
		 			".$mysqli->insert_id."



		 		)





		 	");

		header("Location: lista.php");
	}
	//hacemos uso de la variable mysqli_insert_id , esta en la documentacion
	//devuelve el id autogenerado que se utilizo en la ultima consulta,
	/* es decir la informacion que hayamos ingresado en direccion va a pasar 
	a nuestra tabla usuario y se va a imprimir junto o a la misma vez en nuestra tabla de html, entonces con esta pequeña variable vamso a insertar los datos a la misma vez
	Una vez hecho esto hacemos un header para que nos redireccione*/



?>