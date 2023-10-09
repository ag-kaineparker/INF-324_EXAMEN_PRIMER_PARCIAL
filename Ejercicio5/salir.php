<?php
session_start();
session_destroy();
$_SESSION["usuario"]="nohay";
header("Location: ingreso.php");
exit;
?>
