<?php
	include('conexion.php');
	$con=conectar();
	$vid=$_GET['no'];
	$consulta= ConsultaAlumnos($con,$vid);

	function ConsultaAlumnos($con,$n_p){
		$sql="SELECT * FROM alumno WHERE (num_control='".$n_p."')";
		$resultado=mysqli_query($con,$sql) or die (mysqli_error());
		$filas= mysqli_fetch_assoc($resultado);
		return[
			$filas['num_control'],
			$filas['nombre'],
			$filas['apellidopa'],
			$filas['apellidoma'],
			$filas['edad'],
			$filas['correo']
		];
	} 
 ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
	<title>Modificar</title>
</head>
<body>
	 <div><section class="form-register">
 	<form action="modifica2.php" method="post">
 		
 			Afiliado<input class="controls" type="text" name="control" disabled value="<?php echo $consulta[0] ?>" >
 			Nombre<input class="controls" type="text" name="nombre" value="<?php echo $consulta[1] ?>" >
 			Apellido Pa<input class="controls" type="text" name="apellidopa" value="<?php echo $consulta[2] ?>" >
 			Apellido Ma<input class="controls" type="text" name="apellidoma" value="<?php echo $consulta[3] ?>" >
 			Edad<input class="controls" type="text" name="edad" value="<?php echo $consulta[4] ?>" >
 			Correo<input class="controls" type="text" name="correo" value="<?php echo $consulta[5] ?>" >
 			<input type="hidden" name="control" value="<?php echo $_GET['no'] ?>">
 			<input class="botons" type="submit" name="guardar" value="Guardar Registro">
 			<a href="index.php">Inicio</a><br>
 		
 	</form></section>
 </div>
</body>
</html>