<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <style>
        /* Estilo para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #F09292;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-size: 18px;
        }

        /* Estilo para el formulario de ingreso */
        form {
            max-width: 500px; /* Ancho máximo del formulario */
            margin: center; /* Centra el formulario horizontalmente */
            padding: 60px; /* Espaciado interior del formulario */
            background-color: #ecf0f1; /* Fondo blanco */
            border-radius: 10px; /* Esquinas redondeadas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        /* Estilo para los campos de texto */
        input[type="text"],
        input[type="password"] {
            width: 100%; /* Ajusta el ancho al 100% del contenedor */
            padding: 10px; /* Espaciado interior del campo */
            margin-bottom: 10px; /* Margen inferior para separar del siguiente elemento */
            border: 1px solid #ccc; /* Borde del campo */
            border-radius: 5px; /* Esquinas redondeadas del campo */
        }

        /* Estilo para el botón de enviar */
        input[type="submit"] {
            width: 100%; /* Ajusta el ancho al 100% del contenedor */
            padding: 10px; /* Espaciado interior del botón */
            background-color: #007bff; /* Color de fondo del botón */
            color: #ffffff; /* Color del texto del botón */
            border: none; /* Elimina el borde del botón */
            border-radius: 5px; /* Esquinas redondeadas del botón */
            cursor: pointer; /* Cambia el cursor al pasar el ratón */
        }

        /* Estilo para el botón de enviar al pasar el ratón */
        input[type="submit"]:hover {
            background-color: #0056b3; /* Cambia el color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>
    <form action="usuario.php" method="POST">
        Usuario: <input type="text" name="usuario" value=""><br>
        Contraseña: <input type="password" name="contrasenia" value=""><br>
        <input type="submit" name="aceptar" value="Aceptar">
    </form>
</body>
</html>

<?php
/*INSERT INTO Estudiante (EstudianteCI, Contraseña, color, Nombre, Apellido, FechaNacimiento, Genero, Departamento, Semestre, Materia, Nota)
VALUES
    (12345678, 'contrasena1', '#FF5733', 'Juan', 'Pérez', '2000-05-15', 'Masculino', 'La Paz', 'Séptimo', 'INF-324', 70),
    (23456789, 'contrasena2', '#00FF00', 'María', 'Gómez', '2001-03-20', 'Femenino', 'Santa Cruz', 'Séptimo', 'INF-324', 85),
    (34567890, 'contrasena3', '#0000FF', 'Carlos', 'López', '2002-07-10', 'Masculino', 'Cochabamba', 'Séptimo', 'INF-324', 92),
    (45678901, 'contrasena4', '#FFFF00', 'Ana', 'Martínez', '2003-01-05', 'Femenino', 'Oruro', 'Séptimo', 'INF-324', 78),
    (56789012, 'contrasena5', '#FF00FF', 'Eduardo', 'Sánchez', '2004-09-30', 'Masculino', 'Potosí', 'Séptimo', 'INF-324', 88);
*/
?>