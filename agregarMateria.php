<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<img  src="logo.png" alt="BENEMÉRITA ESCUELA NORMAL DE COAHUILA">
	<div class="login">
		
		
    <form method="post" id="formlg" action="RegistrarMateria.php">
    	<input type="text" name="nombre" placeholder="Nombre de la Materia" required="required" />
        <input type="text" name="clave" placeholder="Clave de la Materia" required="required" />
		<button action="alass.php" type="submit" class="btn btn-primary btn-block btn-large">Registrar.</button>
		<a href="inde.php">Regresar</a>
    </form>
</div>

<script src="js/main.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>
