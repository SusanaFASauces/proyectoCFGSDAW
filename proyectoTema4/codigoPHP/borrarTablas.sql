-- Autor.- Susana Fabián Antón
-- Fecha creación.- 10/11/2020
-- Última modificación.- 10/11/2020

-- -- creamos la tabla Departamento
-- CREATE TABLE IF NOT EXISTS Departamento (
--     CodDepartamento VARCHAR(3),
--     DescDepartamento VARCHAR(255),
--     FechaBaja DATE,
--     VolumenNegocio FLOAT,
--     PRIMARY KEY(CodDepartamento)
-- )ENGINE=InnoDB;

-- borramos todos los datos de la tabla 'Departamento'
DELETE FROM Departamento;

-- insertamos datos en la tabla 'Departamento'
INSERT INTO Departamento(CodDepartamento,DescDepartamento,FechaBaja,VolumenNegocio) VALUES
('INF','Departamento de informatica',null,1),
('VEN','Departamento de ventas',null,2),
('CON','Departamento de contabilidad',null,3),
('COC','Departamento de cocina',null,4),
('MEC','Departamento de mecanica',null,5),
('MAT','Departamento de matematicas',null,6);


-- CODIGO ORIGINAL
-- -- borramos la tabla Departamento
-- DROP TABLE IF EXISTS Departamento;