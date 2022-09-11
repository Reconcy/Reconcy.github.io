<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			
			font-family: Arial; 
			 background:url("https://blog.smartfit.com.mx/wp-content/uploads/2022/03/en-cuanto-tiempo-se-ven-los-resultados-del-gym-1.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
		}
		h1 {text-shadow: 7px 4px 5px blue;
			color: white;
			position: absolute;
			top: 90px;
			left: 500px;
		}
		#main-container{
			margin: 200px auto;
			width: 700px;
		}
		table{
			background-color: white;
			text-align: center;
			border-collapse: collapse;
			width: 100%;

		}
		td{

			padding: 6px;
		}
		th{
			background-color: #246355;
			border-bottom: solid 5px #0F3662D;
			color: white;
		}
		tr:nth-child(even){
			background-color: #ddd;
		}
		tr:hover td{
			background-color: #369681;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="tabla.css">
	<title>Gym Spartan</title>
</head>
<body class="p">
	<?php
		include("conexion.php");;
		$con=conectar();
		$sql = "SELECT * FROM alumno";
		$resultado=mysqli_query($con,$sql);

	?>
	<h1>Administrar Usuarios</h1>
		<div id="main-container">
		<table><tbody>
				<tr>
					<th>Numero De Afiliado</th>
					<th>Nombre	</th>
					<th>Apellido Ma	</th>
					<th>Apellido Pa	</th>
					<th>Edad	</th>
					<th>Correo</th>
					<th><a href="consulta.php">Consultar</a><br></th>
					<th><a href="nuevo.php">Nuevo</a><br></th>
				</tr>
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
						echo "<td><a href='eliminar.php?no=".$filas['num_control']."'>Eliminar </a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>