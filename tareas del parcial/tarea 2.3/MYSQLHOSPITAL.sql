CREATE DATABASE IF NOT EXISTS hospital;
USE hospital;

CREATE TABLE Medicamentos (
    ID_MEDICAMENTO         CHAR(5)              PRIMARY KEY,
    NOMBRE                 VARCHAR(50)          NOT NULL,
    SUBSTANCIA             VARCHAR(50)          NOT NULL,
    VIA_ADMINISTRACION     VARCHAR(50)          NOT NULL,
    CANTIDAD               INT                  NOT NULL,
    EXIPIENTE              CHAR(10)             NOT NULL,
    INDICACIONES           VARCHAR(50)          NOT NULL,
    CONTRAINDICACIONES     VARCHAR(50)          NOT NULL, -- Sin espacios adicionales al final
    REACCIONES             VARCHAR(50)          NOT NULL,
    CONTROLADO             TINYINT(1)           NOT NULL
);


CREATE TABLE Detalle_Consulta (
    ID_CONSULTA            INT(4)               PRIMARY KEY,
    ID_MEDICAMENTO         CHAR(5),
    FOREIGN KEY (ID_MEDICAMENTO) REFERENCES Medicamentos(ID_MEDICAMENTO),
    PRESCRIPCION           TEXT                  NOT NULL
);
CREATE TABLE CONSULTAS (
ID_CONSULTA                INT(4)                PRIMARY KEY,
ID_MEDICO                  CHAR(10)              NOT NULL,
NUMERO_ISSSTE              CHAR(10)              NOT NULL,
INDICACIONES               TEXT                  NOT NULL,
FECHA                      DATETIME              NOT NULL
);

CREATE TABLE MEDICOS (
ID_MEDICO               CHAR(10)               PRIMARY KEY,
APELLIDO_PATERNO        VARCHAR(30)            NOT NULL,
APELLIDO_MATERNO        VARCHAR(30)            NOT NULL,
NOMBRE                  VARCHAR(50)            NOT NULL,
ESPECIALIDAD            VARCHAR(50)            NOT NULL,
FECHA_TITULACION        DATETIME               NOT NULL

);

CREATE TABLE PACIENTES (
NUMERO_ISSSTE           CHAR(10)               PRIMARY KEY,
RFC                     CHAR(10)               NOT NULL,
CURP                    CHAR(10)               NOT NULL,
NOMBRE                  VARCHAR(50)            NOT NULL,   
APELLIDO_PATERNO        VARCHAR(30)            NOT NULL,
APELLIDO_MATERNO        VARCHAR(30)            NOT NULL,
FECHA_NACIMIENTO        DATETIME               NOT NULL,
SEXO                    CHAR(1)                NOT NULL,
TIPO_SANGUINEO          CHAR(1)                NOT NULL,
FACTOR_RH               CHAR(1)                NOT NULL,
CALLE                   VARCHAR(50)            NOT NULL,  
COLONIA                 VARCHAR(50)            NOT NULL, 
CIUDAD                  VARCHAR(50)            NOT NULL,  
CP                      CHAR(5)                NOT NULL 
);
-- INSERTAR MEDICOS
INSERT INTO MEDICOS (ID_MEDICO, APELLIDO_PATERNO, APELLIDO_MATERNO, NOMBRE, ESPECIALIDAD, FECHA_TITULACION)
VALUES  
    ('ID001', 'APELLIDO1', 'APELLIDO2', 'MEDICO1', 'ESPECIALIDAD1', '2024-01-01'),
    ('IDMED002', 'Apellido3', 'Apellido4', 'Médico2', 'Especialidad2', '2023-01-02'),
    ('IDMED003', 'Apellido5', 'Apellido6', 'Médico3', 'Especialidad3', '2023-01-03');

-- Insertar medicamentos
INSERT INTO Medicamentos (ID_MEDICAMENTO, NOMBRE, SUBSTANCIA, VIA_ADMINISTRACION, CANTIDAD, EXIPIENTE, INDICACIONES, CONTRAINDICACIONES, REACCIONES, CONTROLADO) 
VALUES     
    ('MED001', 'Medicamento1', 'Substancia1', 'Vía1', 100, 'Exipiente1', 'Indicaciones1', 'Contraindicaciones1', 'Reacciones1', 1),     
    ('MED002', 'Medicamento2', 'Substancia2', 'Vía2', 200, 'Exipiente2', 'Indicaciones2', 'Contraindicaciones2', 'Reacciones2', 0),     
    ('MED003', 'Medicamento3', 'Substancia3', 'Vía3', 300, 'Exipiente3', 'Indicaciones3', 'Contraindicaciones3', 'Reacciones3', 1);

INSERT INTO Medicamentos (ID_MEDICAMENTO, NOMBRE, SUBSTANCIA, VIA_ADMINISTRACION, CANTIDAD, EXIPIENTE, INDICACIONES, CONTRAINDICACIONES, REACCIONES, CONTROLADO)  
VALUES          
    ('MED004', 'Medicamento4', 'Substancia4', 'Vía4', 400, 'Exipiente4', 'Indicaciones4', 'Contraindicaciones4', 'Reacciones4', 0),          
    ('MED005', 'Medicamento5', 'Substancia5', 'Vía5', 500, 'Exipiente5', 'Indicaciones5', 'Contraindicaciones5', 'Reacciones5', 1),          
    ('MED006', 'Medicamento6', 'Substancia6', 'Vía6', 600, 'Exipiente6', 'Indicaciones6', 'Contraindicaciones6', 'Reacciones6', 0),          
    ('MED007', 'Medicamento7', 'Substancia7', 'Vía7', 700, 'Exipiente7', 'Indicaciones7', 'Contraindicaciones7', 'Reacciones7', 1),          
    ('MED008', 'Medicamento8', 'Substancia8', 'Vía8', 800, 'Exipiente8', 'Indicaciones8', 'Contraindicaciones8', 'Reacciones8', 0),          
    ('MED009', 'Medicamento9', 'Substancia9', 'Vía9', 900, 'Exipiente9', 'Indicaciones9', 'Contraindicaciones9', 'Reacciones9', 1),          
    ('MED010', 'Medicamento10', 'Substancia10', 'Vía10', 1000, 'Exipiente10', 'Indicaciones10', 'Contraindicaciones10', 'Reacciones10', 0);

-- Insertar pacientes
INSERT INTO PACIENTES (NUMERO_ISSSTE, RFC, CURP, NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, FECHA_NACIMIENTO, SEXO, TIPO_SANGUINEO, FACTOR_RH, CALLE, COLONIA, CIUDAD, CP)
VALUES
    ('ISSSTE001', 'RFC001', 'CURP001', 'Paciente1', 'Apellido1', 'Apellido2', '2000-01-01', 'M', 'A', '+', 'Calle1', 'Colonia1', 'Ciudad1', '12345'),
    ('ISSSTE002', 'RFC002', 'CURP002', 'Paciente2', 'Apellido3', 'Apellido4', '2001-02-02', 'F', 'B', '-', 'Calle2', 'Colonia2', 'Ciudad2', '23456'),
    ('ISSSTE003', 'RFC003', 'CURP003', 'Paciente3', 'Apellido5', 'Apellido6', '2002-03-03', 'M', 'AB', '+', 'Calle3', 'Colonia3', 'Ciudad3', '34567'),
    ('ISSSTE004', 'RFC004', 'CURP004', 'Paciente4', 'Apellido7', 'Apellido8', '2003-04-04', 'F', 'O', '-', 'Calle4', 'Colonia4', 'Ciudad4', '45678'),
    ('ISSSTE005', 'RFC005', 'CURP005', 'Paciente5', 'Apellido9', 'Apellido10', '2004-05-05', 'M', 'A', '+', 'Calle5', 'Colonia5', 'Ciudad5', '56789');
    
    

