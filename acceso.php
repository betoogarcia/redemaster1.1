<?php
	

	session_start();




	$user = !empty($_REQUEST['user'])?$_REQUEST['user']:'';
	$passwd = !empty($_REQUEST['passwd'])?$_REQUEST['passwd']:'';

	$_SESSION['user']="$user";

	if($user && $passwd){
		require("conexion.php");
		$queryadmin ="select * from admin where user_admin ='$user' and passwd = '$passwd'";
		$resultado = $mysqli->query($queryadmin);
		$admin = $resultado->num_rows;
		//
		$queryusuario ="select * from usuario where user_usuario ='$user' and passwd = '$passwd'";
		$resultado = $mysqli->query($queryusuario);
		$usuario = $resultado->num_rows;
		//

		if($admin>0)
		{
			
			header('location: admin.php');
			
/*			$_SESSION['apellido']="Tellez";
			echo "<a href='pagina2.html'>Ir a pagina 2</a>";*/

			//echo "Entraste";
		}
		elseif ($usuario >0 ) {
			# code...
			header('location: usuario.php');
		}
		
		else
		{
			
			//header('location: login.html');
			//echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
			//echo '<p>Error, el usuario o contrase&ntilde;a es erroneo</p>';
			 echo '
        <script type="text/javascript">
			window.location="login.php?error=1";
        </script>';
		}

	}	
	else
	{
		header('location: login.html');
	}

?>