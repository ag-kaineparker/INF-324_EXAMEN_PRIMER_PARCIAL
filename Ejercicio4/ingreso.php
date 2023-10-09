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
INSERT INTO docente (DocenteCI, Contraseña, Nombre, Apellido, color)
VALUES
    (1234, 'contrasena1', 'Sandra', 'García', '#FF5733'),
    (5678, 'contrasena2', 'Martín', 'Rodríguez', '#00FF00'),
    (9101, 'contrasena3', 'Laura', 'Fernández', '#0000FF'),
    (2345, 'contrasena4', 'Diego', 'Hernández', '#FFFF00'),
    (6789, 'contrasena5', 'Valentina', 'López', '#FF00FF');
	
MAS ESTUDIANTES
INSERT INTO Estudiante (EstudianteCI, Contraseña, color, Nombre, Apellido, FechaNacimiento, Genero, Departamento, Semestre, Materia, Nota)
VALUES
    (67890123, 'contrasena6', '#A52A2A', 'Laura', 'Hernández', '2000-02-10', 'Femenino', 'Chuquisaca', 'Séptimo', 'INF-324', 85),
    (78901234, 'contrasena7', '#FFA500', 'Diego', 'Gutierrez', '2001-08-22', 'Masculino', 'Beni', 'Séptimo', 'INF-324', 90),
    (89012345, 'contrasena8', '#008000', 'Sara', 'Perez', '2002-11-14', 'Femenino', 'Tarija', 'Séptimo', 'INF-324', 79),
    (98765432, 'contrasena9', '#800080', 'Javier', 'Rojas', '2003-06-17', 'Masculino', 'Pando', 'Séptimo', 'INF-324', 88),
    (87654321, 'contrasena10', '#FFC0CB', 'Isabel', 'Romero', '2004-04-03', 'Femenino', 'La Paz', 'Séptimo', 'INF-324', 92),
    (11223344, 'contrasena11', '#7FFF00', 'Miguel', 'Alvarez', '2000-03-25', 'Masculino', 'Santa Cruz', 'Séptimo', 'INF-324', 87),
    (22334455, 'contrasena12', '#8A2BE2', 'Natalia', 'Chavez', '2001-01-12', 'Femenino', 'Cochabamba', 'Séptimo', 'INF-324', 94),
    (33445566, 'contrasena13', '#FF4500', 'Gabriel', 'Castro', '2002-12-07', 'Masculino', 'Oruro', 'Séptimo', 'INF-324', 82),
    (44556677, 'contrasena14', '#9400D3', 'Paula', 'Fernandez', '2003-07-18', 'Femenino', 'Potosí', 'Séptimo', 'INF-324', 89),
    (55667788, 'contrasena15', '#32CD32', 'Alejandro', 'Gonzalez', '2004-05-19', 'Masculino', 'Chuquisaca', 'Séptimo', 'INF-324', 91),
    (66778899, 'contrasena16', '#FF1493', 'Valeria', 'Herrera', '2000-11-09', 'Femenino', 'Tarija', 'Séptimo', 'INF-324', 88),
    (77889900, 'contrasena17', '#008B8B', 'Erick', 'Ibanez', '2001-09-28', 'Masculino', 'Beni', 'Séptimo', 'INF-324', 93),
    (88990011, 'contrasena18', '#B22222', 'Carla', 'Jimenez', '2002-06-15', 'Femenino', 'Pando', 'Séptimo', 'INF-324', 86),
    (99001122, 'contrasena19', '#228B22', 'Fernando', 'Lara', '2003-03-04', 'Masculino', 'La Paz', 'Séptimo', 'INF-324', 90),
    (22331144, 'contrasena20', '#8B008B', 'Liliana', 'Moreno', '2004-12-23', 'Femenino', 'Santa Cruz', 'Séptimo', 'INF-324', 88);


*/
?>