<?php
	require("conexion.php");

session_start();

$id_tema = $_REQUEST['id_tema'];
	
	
	
	$query="DELETE FROM tema where id_tema='$id_tema'";

	$resultado=$mysqli->query($query);
	echo $id_tema;


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
		<title>Eliminar usuario</title>
		<meta charset="UTF-8"> 
	</head>
	<body>
		<?php

$user=$_SESSION['user'];

//echo "el nombre es: $num_trabajador <br>";


//echo "<a href='pagina4.php'> Cerrar sesion </a>";

?>
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
