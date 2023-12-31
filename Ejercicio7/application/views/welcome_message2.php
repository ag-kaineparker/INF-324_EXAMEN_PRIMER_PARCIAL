<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

</head>
<body>
<div id="container">
    <h1>Tabla de Estudiantes</h1>

    <div id="body">
	   <table border="1">
        <table>
            <tr>
                <th>EstudianteCI</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Genero</th>
                <th>Departamento</th>
                <th>Semestre</th>
                <th>Materia</th>
                <th>Nota</th>
            </tr>
            <?php foreach ($estudiantes as $estudiante): ?>
            <tr>
                <td><?php echo $estudiante['EstudianteCI']; ?></td>
                <td><?php echo $estudiante['Contraseña']; ?></td>
                <td><?php echo $estudiante['Nombre']; ?></td>
                <td><?php echo $estudiante['Apellido']; ?></td>
                <td><?php echo $estudiante['Genero']; ?></td>
                <td><?php echo $estudiante['Departamento']; ?></td>
                <td><?php echo $estudiante['Semestre']; ?></td>
                <td><?php echo $estudiante['Materia']; ?></td>
                <td><?php echo $estudiante['Nota']; ?></td>
				 <td>
                    <!-- Botones para modificar y eliminar estudiante -->
                    
					<a href="<?= base_url('welcome/modificar_estudiante/' . $estudiante['EstudianteCI']) ?>">Modificar</a>
                    <a href="<?= base_url('welcome/eliminar_estudiante/' . $estudiante['EstudianteCI'])?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
		
		
		 <!-- Formulario para agregar estudiante -->
    <h2>Agregar Estudiante</h2>
    <form action="<?= base_url('welcome/agregar_estudiante') ?>" method="post">
        <label for="estudianteCI">EstudianteCI:</label>
        <input type="text" id="estudianteCI" name="estudianteCI" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="genero">Genero:</label>
        <input type="text" id="genero" name="genero" required><br>
        <label for="departamento">Departamento:</label>
        <input type="text" id="departamento" name="departamento" required><br>
        <label for="semestre">Semestre:</label>
        <input type="text" id="semestre" name="semestre" required><br>
        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia" required><br>
        <label for="nota">Nota:</label>
        <input type="text" id="nota" name="nota" required><br>
        <input type="submit" value="Agregar Estudiante">
    </form>
		
		
    </div>
	


    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
