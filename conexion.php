<?php 
function conectar(){
	$con = mysqli_connect("localhost", "root", "", "escuela");

	if (!$con) {
		die("Error al conectar con la base de datos".mysqli_connect_error());
	}

	mysqli_select_db($con,"escuela");
	return $con;
}
 ?>