
<?php
	$mysqli=new mysqli("localhost", "root", "", "social");

	if(mysqli_connect_errno()){
		echo "conexion fallida :", mysqli_connect_errno();
		exit();
	}
	else
	{
		echo "hizo conexion";
		//header('location: login.html');
	}

?>