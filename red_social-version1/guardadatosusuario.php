<?php
	
	require("conexion.php");

	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario=$_POST['usuario'];
	$passwd = $_POST['passwd'];
	

	

	$query="INSERT INTO usuario( nombre, apellido,  user_usuario,  passwd) VALUES ( '$nombre', '$apellido','$usuario' , '$passwd')";

	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title>guardar Paciente</title>
		<meta charset="UTF-8"> 
	</head>
	<body>
		<center>

			<?php
			if($resultado>0){
			header("Location:login.html");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>