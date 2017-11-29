<?php

session_start();
//conexion al servidor de base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'horarioescolar') or die ('No pudo conectarse a servidor de Base de Datos MySql: '.mysql_error());

//seleccionar base de datos kardex
//mysql_select_db('kardex') or die ('No se puede abrir la estructura de BD'.mysql_error());
$usr = $_POST ['u'];
$pwd = $_POST ['p'];

$consulta = "SELECT * FROM usuarios WHERE usuario ='".$usr."' and passw ='".$pwd."' and tipo_usuario ='Administrador'";
$consultaA = "SELECT * FROM usuarios WHERE usuario ='".$usr."' and passw ='".$pwd."' and tipo_usuario ='Prefecto'";
$consultaD = "SELECT * FROM usuarios WHERE usuario ='".$usr."' and passw ='".$pwd."' and tipo_usuario  ='Maestro'";

$tablaAdmin = mysqli_query($conexion, $consulta);
$tablaPrecto = mysqli_query($conexion, $consultaA);
$tablaMaestr = mysqli_query($conexion, $consultaD);

	if(mysqli_num_rows($tablaAdmin)>0){
	$_SESSION['usr'] = $usr;
	header ("location:inde.php");
	}
	else if(mysqli_num_rows($tablaPrecto) >0 ){
	$_SESSION['usr'] = $usr;
	header ("location:seleccion.html");
	}	
	else if(mysqli_num_rows($tablaMaestr) >0 ){
	$_SESSION['usr'] = $usr;
	header ("location:index.html");
	}	
?>