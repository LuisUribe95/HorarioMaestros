<?php
//conexion al servidor web y bd
$conexionBD = @mysql_connect('localhost', 'root', '') or die('No pudo conectarse al servidor de Base de Datos Mysql: ' . mysql_error());
//seleccionar base de datos
mysql_select_db('horarioescolar') or die('No se puede abrir la estructura de BD' . mysql_error());

// Preguntaremos si se han enviado ya las variables necesarias
if (isset($_POST["nombre"] ) ) {
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];

// Hay campos en blanco
if($nombre==NULL|$clave==NULL) {
echo "Hay Campos Vacios";
}else{
// &iquest;Coinciden las contrase&ntilde;as?
// Comprobamos si el nombre de usuario ya exist&iacute;an
$checkuser = mysql_query("SELECT nombre FROM materias WHERE nombre='$nombre'" ) ;
$username_exist = mysql_num_rows ($checkuser);
$mensaje = "";
if ($username_exist>0) {
echo "La materia ya existe";
}else{
//Todo parece correcto procedemos con la inserccion
$query = "INSERT INTO materias (nombre,clave) VALUES('$nombre','$clave')";
mysql_query($query) or die(mysql_error());
echo "El Usuario $nombre ha Sido Registrado de Manera Satisfactoria. Ahora Puedes Iniciar Session";


}
}
}

?>