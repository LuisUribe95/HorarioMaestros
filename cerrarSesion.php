<?php
session_start();
unset($_SESSION["usuario"]); 
unset($_SESSION["passw"]);
session_destroy();
header("Location: ind.php");
exit;
?>