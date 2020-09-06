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
		<form action="insert.php" method="post">
			
			<label>Nombre</label>
			<input type="text" required name="nombre" placeholder="Nombre...."><br><br>

			<label>fecha</label>
			<input type="date" required name="fechaactualizacion" placeholder="Fecha..."><br><br>

			

			<!--aca comienza la otra tabla  estados-->


			<label>Estados</label>
			<!--input type="text" required name="estados"><br><br--->
			<select name="estados">
			<option selected=""  value="0" >Estados de Cliente</option>
			<optgroup  label="Estado de Clientes"> 
				<option value="Potencial">Potencial</option>
				<option value="Nuevo">Nuevo</option>
				<option value="Malo">Malo</option>
				<option value="Excelente">Excelente</option></br>

			</optgroup></select></br-->

			

			<input type="submit" name="agregar"  value="agregar">






		</form>





	</center>

</body>
</html>