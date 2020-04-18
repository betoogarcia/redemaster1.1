<?php
	require("conexion.php");

	session_start();

	$id_admin=$_REQUEST['id_admin'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$passwd = $_POST['passwd'];
	$user_admin = $_POST['user_admin'];
	$foto = $_POST['foto'];
	
	

	
	$query="UPDATE admin SET nombre='$nombre', apellido='$apellido', passwd='$passwd', user_admin='$user_admin',  foto='$foto' where id_admin=$id_admin" ;

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
			header("Location:admin.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>