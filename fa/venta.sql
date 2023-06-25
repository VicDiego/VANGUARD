
CREATE DATABASE fventas;


USE fventas;

CREATE TABLE registros (
  id INT PRIMARY KEY,
  producto VARCHAR(255),
  cantidad INT,
  precio DECIMAL(10,2),
  fecha DATETIME
);