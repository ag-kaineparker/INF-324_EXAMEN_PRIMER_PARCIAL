
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
    include "conexion.inc.php";

   
    $sql = "SELECT Departamento, Nota FROM Estudiante";
    $resultado = mysqli_query($con, $sql);

    if ($resultado) {

        $notasPorDepartamento = array();

        // Llenamos el array con las notas de cada departamento
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $departamento = $fila['Departamento'];
            $nota = $fila['Nota'];
            if (!isset($notasPorDepartamento[$departamento])) {
                $notasPorDepartamento[$departamento] = array();
            }
            $notasPorDepartamento[$departamento][] = $nota;
        }

        echo '<div class="container">';
        echo '<h2 style="text-align: center;">Media de Notas por Departamento (arrays) </h2>';
		echo "</div>";
        echo "<table>";
        echo "<tr><th>Departamento</th>";

        // Imprimir los nombres de los departamentos como encabezados de columna
        foreach ($notasPorDepartamento as $departamento => $notas) {
            echo "<th>{$departamento}</th>";
        }
        echo "</tr>";

        // Calcular y mostrar las medias de notas por departamento como filas
        echo "<tr><td>Media de Notas</td>";
        foreach ($notasPorDepartamento as $departamento => $notas) {
            $media = array_sum($notas) / count($notas);
            echo "<td>" . round($media, 1) . "</td>"; 
        }
        echo "</tr>";

        echo "</table>";
    } else {
        echo "Error en la consulta: " . mysqli_error($con);
    }

 
    mysqli_close($con);
    ?><div class="container_inf">
		<a href="index.php" class="boton-enlace">ATRAS</a>
		</div>
</body>

</html>
