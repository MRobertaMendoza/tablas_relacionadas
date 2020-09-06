

<?php

		require_once("conexion.php");


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

		// aca comienza tabla cliente update
			// aunque trabajamos con tablas relacionadas en la 
			// actualizacion se trabaja de manera independiente
		$mysqli ->query("UPDATE  
						
							cliente
						SET 
						
							nombre ='".$_POST["nombre"]."',
							fechaactualizacion = '".$_POST["fechaactualizacion"]."'
						WHERE 

							id_cliente =".$_REQUEST["idcliente"]."


					");


					$mysqli->query("
								UPDATE
									estados
								SET
									estado='".$_POST["esatdos"]."'

								WHERE

									id_estados =".$_REQUEST["idestados"]."

									");

					//Si hay conexión los datos se llevarán hacía la tabla
				  if($mysqli){
				   		 header("Location: lista.php");
				  			}
				  //Si no hay conexión aparecerá lo siguiente
				  else{
				    	echo "Registros no actualizados !!";
				  		}
				  	}



?>