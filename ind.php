<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<title>LOGIN</title>
</head>
<body>
<img  src="logo.png" alt="BENEMÉRITA ESCUELA NORMAL DE COAHUILA">
	<div class="login">
		
		
    <form method="post" id="formlg" action="login.php">
    	<input type="text" name="u" placeholder="Usuario" required="required" />
        <input type="password" name="p" placeholder="Contraseña" required="required" />
		<button action="alass.php" type="submit" class="btn btn-primary btn-block btn-large">Ingresa.</button>
		<a href="nvoUsuario.php">Registrate</a>
		
    </form>
</div>

<script src="js/jquery.min.js"></script>
</body>
</html>

