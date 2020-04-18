<?php
	require("conexion.php");

	session_start();

	$id_user=$_REQUEST['id_user'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$user_usuario = $_POST['user_usuario'];
	$foto = $_POST['foto'];
	$passwd = $_POST['passwd'];
	
	
	

	
	$query="UPDATE usuario SET nombre='$nombre', apellido='$apellido', user_usuario='$user_usuario',  foto='$foto',  passwd='$passwd'where id_user=$id_user" ;

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
			header("Location:user.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>