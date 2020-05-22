<?php
	
	require("conexion.php");

	
	$nombre_tema = $_REQUEST['nombre_tema'];
	$id_admin= $_POST['id_admin'];
	

	

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
			header("Location:admin.php");
			 } else { 
			echo "Error";
			 }?>
		</center>
	</body>
</html>