-- Crear la tabla de Estudiantes
CREATE TABLE Estudiante (
    EstudianteCI INT PRIMARY KEY,
	Contraseña VARCHAR(50),
    Nombre VARCHAR(100),
    Apellido VARCHAR(100),
    FechaNacimiento DATE,
    Genero VARCHAR(10),
    Departamento VARCHAR(100),
	Semestre VARCHAR(20),
	Materia VARCHAR(20),
	Nota INT
);

CREATE TABLE Docente (
    DocenteCI INT PRIMARY KEY,
	Contraseña VARCHAR(50),
    Nombre VARCHAR(100),
    Apellido VARCHAR(100),
);

-- Crear la tabla de Carreras
CREATE TABLE Carrera (
    CarreraID INT PRIMARY KEY,
    NombreCarrera VARCHAR(100),
    Duracion INT,
	Facultad VARCHAR(100)
);

-- Crear la tabla de Kardex
CREATE TABLE Kardex (
    KardexID INT PRIMARY KEY,
	Horarios VARCHAR(200),
	Telefono INT
);

-- Crear la tabla del Instituto de Investigación
CREATE TABLE InstitutoInvestigacion (
    InstitutoID INT PRIMARY KEY,
    NombreInstituto VARCHAR(100),
    Ubicacion VARCHAR(100),
    Director VARCHAR(100)
);

--DATOS TABLAS
INSERT INTO carrera (CarreraID, NombreCarrera, Duracion, Facultad) VALUES (01, "Informatica", 10, "Ciencias Puras y Naturales");


INSERT INTO kardex (KardexID, Horarios, Telefono) VALUES (01,"Lunes a Viernes de 08:00 a 16:00",72569878);

INSERT INTO institutoinvestigacion (InstitutoID, NombreInstituto, Director,Ubicacion) VALUES (01,"Instituto de Programacion e Investigacion","Jose Francisco Severich","Av. Federico Suazo #489");
