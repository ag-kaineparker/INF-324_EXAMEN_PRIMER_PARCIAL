
<?php
include "conexion.inc.php";
include "usuario.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="estilo.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de Notas por Departamento</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
			background-color: #ffffff;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body style="background-color:<?php echo $_SESSION["color"];?>;">
    <?php
    

    // Consulta SQL para calcular la media de notas por departamento
    $sql = "SELECT
                ROUND(MAX(CASE WHEN Departamento = 'La Paz' THEN MediaNota END), 1) AS LaPaz,
                ROUND(MAX(CASE WHEN Departamento = 'Oruro' THEN MediaNota END), 1) AS Oruro,
                ROUND(MAX(CASE WHEN Departamento = 'Potosí' THEN MediaNota END), 1) AS Potosi,
                ROUND(MAX(CASE WHEN Departamento = 'Chuquisaca' THEN MediaNota END), 1) AS Chuquisaca,
                ROUND(MAX(CASE WHEN Departamento = 'Cochabamba' THEN MediaNota END), 1) AS Cochabamba,
                ROUND(MAX(CASE WHEN Departamento = 'Tarija' THEN MediaNota END), 1) AS Tarija,
                ROUND(MAX(CASE WHEN Departamento = 'Santa Cruz' THEN MediaNota END), 1) AS SantaCruz,
                ROUND(MAX(CASE WHEN Departamento = 'Beni' THEN MediaNota END), 1) AS Beni,
                ROUND(MAX(CASE WHEN Departamento = 'Pando' THEN MediaNota END), 1) AS Pando
            FROM (
                SELECT Departamento, AVG(Nota) AS MediaNota
                FROM Estudiante
                GROUP BY Departamento
            ) AS DepartamentoMedia";

    $resultado = mysqli_query($con, $sql);

    if ($resultado) {
		echo '<div class="container">';
        echo '<h2 style="text-align: center;">Media de Notas por Departamento</h2>';
		echo "</div>";
        echo "<table>";
        echo "<tr><th>La Paz</th><th>Oruro</th><th>Potosí</th><th>Chuquisaca</th><th>Cochabamba</th><th>Tarija</th><th>Santa Cruz</th><th>Beni</th><th>Pando</th></tr>";
        $fila = mysqli_fetch_assoc($resultado);
        echo "<tr>";
        echo "<td>{$fila['LaPaz']}</td>";
        echo "<td>{$fila['Oruro']}</td>";
        echo "<td>{$fila['Potosi']}</td>";
        echo "<td>{$fila['Chuquisaca']}</td>";
        echo "<td>{$fila['Cochabamba']}</td>";
        echo "<td>{$fila['Tarija']}</td>";
        echo "<td>{$fila['SantaCruz']}</td>";
        echo "<td>{$fila['Beni']}</td>";
        echo "<td>{$fila['Pando']}</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($con);
    ?>
	<div class="container_inf">
		<a href="index.php" class="boton-enlace">ATRAS</a>
		</div>
</body>

</html>
