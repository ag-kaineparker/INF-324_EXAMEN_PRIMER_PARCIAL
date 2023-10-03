
<link rel="stylesheet" href="estilo.css">
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

<div class="boton-container">

    <a href="InfCarrera.php" class="boton-enlace">Informacion de la Carrera</a>
    <a href="InfKardex.php" class="boton-enlace">Informacion de Kardex</a>
    <a href="InfInsti.php" class="boton-enlace">Informacion del Instituto de investigacion</a>
</div>
