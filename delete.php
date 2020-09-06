<?php

		require_once("conexion.php");


		
// nuestra tabla , que no se ejecute la accion,en este caso un insert
		// nuestra tabla usuarios depende de nuestra tabla direccion,es decir
		// tenemos que ingresar primero en nuestra tabla direccion y despues en nuestra tabla usuario, sino nos maracaria un error
		// los pongo en comillas simple y doble porque le estoy especificando texto
		// en los input o caja de texto

		// aca comienza tabla cliente update
			// aunque trabajamos con tablas relacionadas en la 
			// actualizacion se trabaja de manera independiente
		$mysqli ->query("DELETE FROM  
						
							estados
						
						WHERE 

							id_estado =".$_REQUEST["idestados"]."


					");
		$mysqli ->query("DELETE FROM  
						
							cliente
						
						WHERE 

							id_cliente =".$_REQUEST["idcliente"]."


					");
					echo("eliminado");


				

					//Si hay conexión los datos se llevarán hacía la tabla
				  if($mysqli){
				   		 header("Location: lista.php");
				  			}
				  //Si no hay conexión aparecerá lo siguiente
				  else{
				    	echo "Registros no actualizados !!";
				  		}
				  	



?>