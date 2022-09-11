<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
	<title>Consulta</title>
</head>
<body><section class="form-register">
	<h1>Ingrese los Datos Necesarios</h1>
	<form method="POST" action="consulta.php">
	 <input class="controls" type="text" name="control"placeholder="Ingrese su Numero De Afiliado">
	  <input class="botons" name="enviar" type="submit" value="Consultar">
	  <?php 
	if (isset($_POST['enviar'])) {
		include("conexion.php");
	$con=conectar();
	$control=$_POST["control"];

	$sql = "SELECT * FROM alumno where (num_control='$control')";
	$resultado=mysqli_query($con,$sql);
	while ($consulta= mysqli_fetch_array($resultado)) {
		
		echo $control;
		echo "&nbsp&nbsp&nbsp";
		echo $consulta['nombre'];
		echo "&nbsp&nbsp&nbsp";
		echo $consulta['apellidopa'];
		echo "&nbsp&nbsp&nbsp";
		echo $consulta['apellidoma'];
		echo "&nbsp&nbsp&nbsp";
		echo $consulta['edad'];
		echo "&nbsp&nbsp&nbsp";
		echo $consulta['correo'];
		echo "<br><br>";
	}
	mysqli_close($con);
	}
 ?>
	<a href="index.php">Inicio</a><br>
	</form></section>
</body><br><br>

</html>