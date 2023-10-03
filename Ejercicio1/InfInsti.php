<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Instituto</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="inf">
    <div class="container_inf">
        <?php 
        include "conexion.inc.php";
        $resultado=mysqli_query($con, "select * from institutoinvestigacion");
        $datos=mysqli_fetch_array($resultado);
        $IDInstituto=$datos['InstitutoID'];
        $NombreInstituto=$datos['NombreInstituto'];
        $Ubicacion=$datos['Ubicacion'];
        $Director=$datos['Director'];
        ?>
        <div class="card">
            <h2><?php echo $NombreInstituto; ?></h2>
            <p><strong>Ubicación:</strong> <?php echo $Ubicacion; ?></p>
            <p><strong>Director:</strong> <?php echo $Director; ?></p>
        </div>
		<div class="container_inf">
		<a href="index.php" class="boton-enlace">ATRAS</a>
		</div>
    </div>
	
</body>

</html>
