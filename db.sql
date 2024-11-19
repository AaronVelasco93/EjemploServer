-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS ejemplo_db;

-- Usar la base de datos
USE ejemplo_db;

-- Crear la tabla con tres campos
CREATE TABLE ejemplo_tabla (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    ciudad VARCHAR(100) NOT NULL
);

-- Insertar tres registros en la tabla
INSERT INTO ejemplo_tabla (nombre, edad, ciudad) VALUES
('Juan Pérez', 30, 'Ciudad de México'),
('Ana Gómez', 25, 'Guadalajara'),
('Luis López', 35, 'Monterrey');
