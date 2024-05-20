CREATE DATABASE sistema;
USE sistema;

DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(20) NOT NULL,
    password VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (login, password, nombre) VALUES
('ana', SHA1('123'), 'Ana Lopez'),
('chencho', SHA1('pass'), 'Jesus Perez'),
('tony', SHA1('tony123'), 'Toño Juarez'),
('LICGERMAN', SHA1('123'), 'German');
