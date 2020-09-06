

	<?php
			require_once("conexion.php");

			$query = $mysqli->query("SELECT * FROM cliente 
				LEFT JOIN
					estados
				ON
					cliente.estados_id = estados.id_estados


				");



	?>




<!DOCTYPE html>
<html>
<head>
	<title>Lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
			<table  bgcolor="Afff####" border="3"  align="center">
			
				<thead>
                <tr>
                  <!--Acá usamos un href para crear un nuevo registro-->
                    <th colspan="1"><a href="formulario.php">Nuevo</a></th>
                    <th colspan="5">Lista de CLIENTES</th>
                </tr>
            </thead>
			<caption><h2>Lista de Usuarios</h2></caption>
				<thead>
					<tr>
						
						<th>Nombre</th>
						<th>fecha Actualizacion</th>
						<th>Estados</th>
						<th>Acciones</th>
						<th>Acciones</th>
						
					</tr>
				</thead>
				<tbody>
					
						<?php
							echo "<tr>";
								while($resul = $query->fetch_assoc()) {

									echo "<td>".$resul["nombre"]."</td>";
									echo "<td>".$resul["fechaactualizacion"]."</td>";
									echo "<td>".$resul["estados"]."</td>";
									
								

									echo "<td>

									<a href='form_edit.php?idcliente=".$resul["id_cliente"]." & idestados=".$resul["id_estados"]."'>Editar</a>

									</td>";


									echo "<td>

									<a href='delete.php?idcliente=".$resul["id_cliente"]." & idestados=".$resul["id_estados"]."'>Eliminar</a>

									</td>";


									echo "</tr>";
								}

						?>

				</tbody>

			</table>



</body>
</html>