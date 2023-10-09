<?php
session_start();

if(isset($_POST["usuario"]) && isset($_POST["contrasenia"])){
    $usuario = $_POST["usuario"];
    $contrasenia = $_POST["contrasenia"];

    $con = mysqli_connect("localhost", "admin", "123456");
    mysqli_select_db($con, "MIBD_TAPIA");

    // Consulta para estudiantes
    $consultaEstudiante = "SELECT * FROM Estudiante WHERE EstudianteCI = '$usuario' AND Contraseña = '$contrasenia'";
    $resultadoEstudiante = mysqli_query($con, $consultaEstudiante);

    // Consulta para docentes
    $consultaDocente = "SELECT * FROM Docente WHERE DocenteCI = '$usuario' AND Contraseña = '$contrasenia'";
    $resultadoDocente = mysqli_query($con, $consultaDocente);

    if(mysqli_num_rows($resultadoEstudiante) > 0){
        $fila = mysqli_fetch_assoc($resultadoEstudiante);
        $_SESSION["usuario"] = $fila["Nombre"];
        $_SESSION["color"] = $fila["color"];
        $_SESSION["tipo"] = "estudiante";
        header("Location: index.php");
        exit;
    } elseif(mysqli_num_rows($resultadoDocente) > 0){
        $fila = mysqli_fetch_assoc($resultadoDocente);
        $_SESSION["usuario"] = $fila["Nombre"];
        $_SESSION["color"] = $fila["color"];
        $_SESSION["tipo"] = "docente";
        header("Location: index.php");
        exit;
    } else {
        $_SESSION["usuario"] = "nohay";
        header("Location: index.php");
        exit;
    }

    mysqli_close($con);
}
?>
