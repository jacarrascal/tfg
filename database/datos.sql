CREATE DATABASE IF NOT EXISTS oceano_sostenible;
USE oceano_sostenible;

CREATE TABLE Ubicaciones (
    id_ubicacion INT AUTO_INCREMENT PRIMARY KEY,
    nombre_zona VARCHAR(100),
    coordenadas VARCHAR(50)
);

CREATE TABLE Mediciones (
    id_medicion INT AUTO_INCREMENT PRIMARY KEY,
    id_ubicacion INT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    temperatura_agua DECIMAL(5,2),
    nivel_ph DECIMAL(4,2),
    concentracion_microplasticos INT, -- mg/m3
    FOREIGN KEY (id_ubicacion) REFERENCES Ubicaciones(id_ubicacion)
);

-- Datos iniciales de prueba
INSERT INTO Ubicaciones (nombre_zona, coordenadas) VALUES ('Arrecife Coralino A', '18.22,-66.59'), ('Zona Abisal B', '-20.15, 150.30');