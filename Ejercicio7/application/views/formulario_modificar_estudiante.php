<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MODIFICAR</title>

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
    <h2>Modificar Estudiante</h2>

    <form action="<?= base_url('welcome/modificar_estudiante/' . $estudiante['EstudianteCI']) ?>" method="post">
        <label for="EstudianteCI">EstudianteCI:</label>
        <input type="text" id="EstudianteCI" name="EstudianteCI" value="<?= $estudiante['EstudianteCI'] ?>" required><br>

        <label for="Contraseña">Contraseña:</label>
        <input type="password" id="Contraseña" name="Contraseña" value="<?= $estudiante['Contraseña'] ?>" required><br>

        <label for="Nombre">Nombre:</label>
        <input type="text" id="Nombre" name="Nombre" value="<?= $estudiante['Nombre'] ?>" required><br>

        <label for="Apellido">Apellido:</label>
        <input type="text" id="Apellido" name="Apellido" value="<?= $estudiante['Apellido'] ?>" required><br>

        <label for="Genero">Género:</label>
        <input type="text" id="Genero" name="Genero" value="<?= $estudiante['Genero'] ?>" required><br>

        <label for="Departamento">Departamento:</label>
        <input type="text" id="Departamento" name="Departamento" value="<?= $estudiante['Departamento'] ?>" required><br>

        <label for="Semestre">Semestre:</label>
        <input type="text" id="Semestre" name="Semestre" value="<?= $estudiante['Semestre'] ?>" required><br>

        <label for="Materia">Materia:</label>
        <input type="text" id="Materia" name="Materia" value="<?= $estudiante['Materia'] ?>" required><br>

        <label for="Nota">Nota:</label>
        <input type="text" id="Nota" name="Nota" value="<?= $estudiante['Nota'] ?>" required><br>

        <input type="submit" value="Modificar">
    </form>
</body>
</html>