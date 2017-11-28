<?php
//conexion al servidor web y bd
$conexionBD = @mysql_connect('localhost', 'root', '') or die('No pudo conectarse al servidor de Base de Datos Mysql: ' . mysql_error());
//seleccionar base de datos
mysql_select_db('horarioescolar') or die('No se puede abrir la estructura de BD' . mysql_error());

// Preguntaremos si se han enviado ya las variables necesarias
if (isset($_POST["username"] ) ) {
$username = $_POST["username"];
$password = $_POST["password"];
$tipo = $_POST["TipoUsuario"];
// Hay campos en blanco
if($username==NULL|$password==NULL|$tipo==NULL) {
echo "Hay Campos Vacios";
}else{
// &iquest;Coinciden las contrase&ntilde;as?
// Comprobamos si el nombre de usuario ya exist&iacute;an
$checkuser = mysql_query("SELECT usuario FROM usuarios WHERE usuario='$username'" ) ;
$username_exist = mysql_num_rows ($checkuser);
$mensaje = "";
if ($username_exist>0) {
echo "El nombre de usuario ya existe";
}else{
//Todo parece correcto procedemos con la inserccion
$query = "INSERT INTO usuarios (usuario,tipo_usuario ,passw) VALUES('$username','$tipo','$password')";
mysql_query($query) or die(mysql_error());
echo "El Usuario $username ha Sido Registrado de Manera Satisfactoria. Ahora Puedes Iniciar Session";


}
}
}

?>

<form class="login" action="nvoUsuario.php" method="post">



<input placeholder="Nombre Completo" maxlength="25" size="25" name="username" />
<br />
<input placeholder="Contraseña" type="password" maxlength="25" size="25" name="password"  />
<br />

<div id="mainselection" class="mainselection">


<select id="mainselection" class="tipo" name="TipoUsuario">
<option value="">Elija un Usuario</option>
<option value="Administrador" >Administrador</option>

<option value="Prefecto" >Prefecto</option>
<option value="Maestro">Maestro</option>

</select>

</div>



<button type="submit" value="Registrar"  class="btn btn-primary btn-block btn-large">Registrar Usuario</button>
    <link rel="stylesheet" href="css/nuevoUsuario.css">
  
    <script type="text/javascript" src="js/label.js"></script>
</form>

