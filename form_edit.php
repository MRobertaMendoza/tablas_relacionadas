<?php
			
			require_once("conexion.php");
// tuve que colocar el isset para que me diga que si existe , sino me da error Undefinided index, es decir indice indefinido que no existe la variable
				
					# code...
				
					
				$update = $mysqli->query("SELECT *FROM 
					cliente 
					LEFT JOIN
					 estados
					ON 
						cliente.estados_id = estados.id_estados
					WHERE 
					    id_cliente = ".$_REQUEST["idcliente"]."

					");
				


				
				 $con = $update->fetch_assoc();
		// recorremos cada una de las filas de nuestrta tablas




?>




<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<center>
		<!--en el form agregamos una accion, cada vez que en la cajas de texto pongamos algo y apretemos el boton se agregara, la accion sera un archivo de php (insert)
			este sera el encargado de guardar nuestra informacion en la BD, y sera por un metdodo post, usaremos esta variable post para que sea oculta, con la otra variable GET se vera la informacion de la url,post es mas recomendable-->
		<form action="update.php" method="post">
			
			<label>Nombre</label>

			<input type="hidden" name="idcliente" value="<?php if(isset($con['id_cliente'])): echo $con['id_cliente']; endif; ?>">

			<input type="hidden" name="idestados" value="<?php if(isset($con['id_estados'])): echo $con['id_estados']; endif; ?>">

			
			<input type="text" required name="nombre" placeholder="Nombre...."
				value= "<?php if(isset($con['nombre'])): echo $con['nombre']; endif; ?>">
			<br><br>

			<label>fecha</label>
			<input type="text" required name="fechaactualizacion" placeholder="Fecha..."
			value= "<?php if(isset($con['fechaactualizacion'])): echo $con['fechaactualizacion']; endif; ?>"><br><br>
	
			<!--aca comienza la otra tabla  estados-->
			<label>Estados</label>
			<!--input type="text" required name="estados"><br><br--->
			<select    name="estados" >
			<option    selected="estados" >Estados de Cliente</option>
			<optgroup  label="Estado de Clientes"> 
				<option value="Potencial" >Potencial</option>
				<option value="Nuevo">Nuevo</option>
				<option value="Malo">Malo</option>
				<option value="Excelente">Excelente</option></br>

			</optgroup></select></br-->

			

			<input type="submit" name="agregar"  value="agregar">






		</form>





	</center>

</body>
</html>