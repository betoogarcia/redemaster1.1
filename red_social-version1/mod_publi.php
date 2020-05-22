<?php
	require("conexion.php");

	session_start();

	$id_publicacion=$_REQUEST['id_publicacion'];
	$texto=$_POST['texto'];
	$imagen=$_POST['imagen'];
	$gusta=$_POST['gusta'];
	$nombre=$_POST['nombre'];
	$nombre_tema=$_POST['nombre_tema'];
	
	

	
	$query="UPDATE publicaciones SET  publicacion.texto='$texto',  publicacion.imagen='$imagen', publicacion.gusta='$gusta',  usuario.nombre='$nombre', tema.nombre_tema='$nombre_tema', from publicacion INNER JOIN usuario on publicacion.id_publicacion=usuario.id_user INNER JOIN tema on tema.id_tema=publicacion.id_publicacion where id_publicacion=$id_publicacion" ;

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
			header("Location:publicaciones.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>