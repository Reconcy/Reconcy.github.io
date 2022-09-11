<?php 
	include("conexion.php");
	$con=conectar();
	$control=$_POST["control"];
	$nombre=$_POST["nombre"];
	$apellidopa=$_POST["apellidopa"];
	$apellidoma=$_POST["apellidoma"];
	$edad=$_POST["edad"];
	$correo=$_POST["correo"];

	$sql = "INSERT INTO alumno (num_control, nombre, apellidopa, apellidoma, edad, correo) VALUES ('$control', '$nombre', '$apellidopa', '$apellidoma', '$edad', '$correo')";
	if (mysqli_query($con,$sql)) {
		echo "Exito";
		header("location:index.php");
	}else{
		echo "Error: ".$sql. "<br>" .mysqli_error($con);
	}
	mysqli_close($con);
 ?>
