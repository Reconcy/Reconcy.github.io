<?php 
	include("conexion.php");
	$con=conectar();
	$vid=$_GET['no'];
	$eliminar= eliminaralumno($con,$vid);
	$sql = "DELETE FROM alumno where (num_control='".$vid."')";
	if (mysqli_query($con,$sql)) {
		echo "Exito";
		header("location:index.php");
	}else{
		echo "Error: ".$sql. "<br>" .mysqli_error($con);
	}
	mysqli_close($con);
 ?>
 <?php
	
	function eliminaralumno($con,$n_p){
		$sql="DELETE * FROM alumno WHERE (num_control='".$n_p."')";
	} 
 ?>