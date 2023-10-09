<?php
session_start();

if(isset($_POST["color"])){
    $color = $_POST["color"];
    $con = mysqli_connect("localhost", "admin", "123456");
    mysqli_select_db($con, "MIBD_TAPIA");
    $usuario = $_SESSION["usuario"];
    $consulta = "UPDATE Estudiante SET color = '$color' WHERE Nombre = '$usuario'";
    mysqli_query($con, $consulta);
    $_SESSION["color"] = $color;
    mysqli_close($con);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html style="text-align:center">
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Seleccionar Color</title>
</head>
<body style="background-color:<?php echo $_SESSION["color"];?>;">

<div class="container" >
    <h1>Selecciona tu color preferido:</h1>
    
</div>

<form class="sel" action="color.php" method="POST">
       <select name="color">
            <option value="#FF5733">Rojo</option>
            <option value="#00FF00">Verde</option>
            <option value="#0000FF">Azul</option>
            <option value="#FFFF00">Amarillo</option>
            <option value="#FF00FF">Rosa</option>
            <option value="#008000">Verde Oscuro</option>
            <option value="#800080">Púrpura</option>
            <option value="#FFA500">Naranja</option>
            <option value="#A52A2A">Marrón</option>
        </select>
        <br><br> 
        
    
<input class="boton-enlace" type="submit" value="Guardar Color">
</form>
</body>
</html>

