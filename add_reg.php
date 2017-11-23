<?php
if(!empty($_POST)){
	if(isset($_POST["username"])&&isset($_POST["password"])){
		if($_POST["username"]!=""&& $_POST["password"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usarios where usuario=\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array($query)) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into usuarios(usuario,passw) value (\"$_POST[username]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../inde.php';</script>";
			}
		}
	}
}
?>