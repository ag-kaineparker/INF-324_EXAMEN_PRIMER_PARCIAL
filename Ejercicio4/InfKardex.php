<?php
include "usuario.php"; // Asegúrate de que esta línea esté presente para inicializar la sesión y el color
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrera Detalles</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="inf" style="background-color:<?php echo $_SESSION["color"];?>;">
    <div class="container_inf">
        <?php 
        include "conexion.inc.php";
        $resultado=mysqli_query($con, "select * from kardex");
        $datos=mysqli_fetch_array($resultado);
        $IDKardex=$datos['KardexID'];
        $Horarios=$datos['Horarios'];
        $Telefono=$datos['Telefono'];
        ?>
        <div class="card">
            <h2>INFORMACION DE KARDEX</h2>
            <p><strong>Horarios:</strong> <?php echo $Horarios; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $Telefono; ?></p>
        </div>
		<div class="container_inf">
		<a href="index.php" class="boton-enlace">ATRAS</a>
		</div>
    </div>
	
</body>

</html>
