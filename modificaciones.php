<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificaciones</title>
</head>
<body>
	<?php
		include("conexion.php");;
		$con=conectar();
		$sql = "SELECT * FROM alumno";
		$resultado=mysqli_query($con,$sql);

	?>
	<div>
		<table border="2px">
			<thead>
				<tr>
					<thead>Control	</thead>
					<thead>Nombre	</thead>
					<thead>Apellido Ma	</thead>
					<thead>Apellido Pa	</thead>
					<thead>Edad	</thead>
					<thead>Correo</thead>
				</tr>
			</thead>
			<tbody>
				<?php 
					while ($filas = mysqli_fetch_array($resultado)) {
						echo "<tr>";
						echo "<td>"; echo $filas['num_control']; echo "</td>";
						echo "<td>"; echo $filas['nombre']; echo "</td>";
						echo "<td>"; echo $filas['apellidopa']; echo "</td>";
						echo "<td>"; echo $filas['apellidoma']; echo "</td>";
						echo "<td>"; echo $filas['edad']; echo "</td>";
						echo "<td>"; echo $filas['correo']; echo "</td>";

						echo "<td><a href='modifica.php?no=".$filas['num_control']."'>Modificar </a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div><br>
	<a href="eliminar.html">Eliminar</a><br>
	<a href="consulta.php">Consultar</a><br>
	<a href="index.php">insertar</a><br>
	
</body>
</html>