<?php
session_start();
if(!isset($_SESSION["usuario"])){
	
	header("Location: ingreso.php");
	exit;

}
else{
	if ($_SESSION["usuario"]=="nohay"){
		header("Location: ingreso.php");
		exit;
	}
}
?>
<html>
<link rel="stylesheet" href="estilo.css">
<body style="background-color:<?php echo $_SESSION["color"];?>;">


<table>
<?php 
include "conexion.inc.php";
$con=mysqli_connect("localhost","admin","123456");
mysqli_select_db($con,"MIBD_TAPIA");
$resultado=mysqli_query($con, "select * from Estudiante");

?>

</table>
<div class="container">
	<h1>BIENVENIDO</h1>

</div>





<div class="container">
	Usuario: <?php echo $_SESSION["usuario"];?>

</div>

<div class="boton-container">

    <a href="InfCarrera.php" class="boton-enlace">Informacion de la Carrera</a>
    <a href="InfKardex.php" class="boton-enlace">Informacion de Kardex</a>
    <a href="InfInsti.php" class="boton-enlace">Informacion del Instituto de investigacion</a>
</div>

 <div class="boton-container">
        <a href="color.php" class="boton-enlace">Cambiar Color de Usuario</a>
    </div>
<?php
// Contenido específico para docentes
if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "docente"){
    echo '<div class="boton-container">';
    echo '<a href="media_notas.php" class="boton-enlace">Ver Media de Notas</a>';
    echo '</div>';
}
?>
<div class="boton-container">
	<a href="salir.php" class=boton-enlace> Salir </a> 

</div>

</body>
</html>
