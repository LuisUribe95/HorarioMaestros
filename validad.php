<?php 
	$usuario = $_POST['u'];
	$pass= $_POST['p'];


	if(empty($usuario) || empty($pass))
	{
		header("Location: index.html");
		exit();
	}

	mysql_connect('localhost','root','') or die("Error al conectar".mysql_error());

	mysql_select_db('horarioescolar') or die("Serror al seleccionlar la base de datos".mysql_error());

	$result = mysql_query("SELECT * FROM usuarios where usuario = '".$usuarios."' and passw = '".$pass."'");

	if($row = mysql_fetch_array($result)){
		if(  $row['passw'] == $pass){
			session_start();
			$_SESSION['usuarios'] = $usuario;
			//agregamos una variable de sesion con el tipo de usuario
			$_SESSION['tipo'] = $row['tipo_usuario'];
			header("Location:contenido.php");
		}else{
			header("Location:inde.php");
			exit();
		}
	}else{
		header("Location:inde.php");
		
		exit();
	}
 ?>