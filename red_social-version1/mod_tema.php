<?php
	require("conexion.php");

	session_start();

	$id_tema=$_REQUEST['id_tema'];
	$nombre_tema=$_POST['nombre_tema'];
	$id_admin=$_POST['id_admin'];
	
	
	

	
	$query="UPDATE tema SET nombre_tema='$nombre_tema'where id_tema=$id_tema" ;

	$resultado=$mysqli->query($query);

	$user=$_SESSION['user'];
    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
 header('Location: index.html');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>

<html>
	<head>
		<title>Modificar Admin</title>
		<meta charset="UTF-8"> 
	</head>
	<body>

		
		<center>
			<?php
			if($resultado>0){
			header("Location:tema.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>