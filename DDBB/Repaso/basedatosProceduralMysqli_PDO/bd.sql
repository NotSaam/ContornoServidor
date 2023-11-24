-- Crear la base de datos
CREATE DATABASE Universidad;

-- Usar la base de datos recién creada
USE Universidad;

-- Crear la tabla Estudiantes
CREATE TABLE Estudiantes (
    id_estudiante INT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT,
    carrera VARCHAR(50)
);

-- Crear la tabla Cursos
CREATE TABLE Cursos (
    id_curso INT PRIMARY KEY,
    nombre_curso VARCHAR(50),
    descripcion VARCHAR(255)
);
