<?php 
	include("conexion.php");
	$con=conectar();
		$control=$_POST['control'];
		$nombre=$_POST['nombre'];
		$apellidopa=$_POST['apellidopa'];
		$apellidoma=$_POST['apellidoma'];
		$edad=$_POST['edad'];
		$correo=$_POST['correo'];

		$sql= "UPDATE alumno SET num_control= '".$control."', nombre= '".$nombre."', apellidopa= '".$apellidopa."', apellidoma= '".$apellidoma."', edad='".$edad."', correo= '".$correo."' WHERE num_control='".$control."'";
		mysqli_query($con, $sql) or die (mysql_error());
	mysqli_close($con);
	header("location:index.php");
 ?>