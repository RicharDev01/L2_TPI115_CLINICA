
CREATE DATABASE L2_Clinica_PP17043;

USE L2_Clinica_PP17043;

CREATE TABLE IF NOT EXISTS TBL_PACIENTES (
  PAC_ID INT PRIMARY KEY AUTO_INCREMENT,
  PAC_PRIMER_NOMBRE VARCHAR(50) NOT NULL COMMENT 'Primer Nombre del Paciente',
  PAC_SEGUNDO_NOMBRE VARCHAR(50) NULL COMMENT 'Segundo Nombre del Paciente',
  PAC_PRIMER_APELLIDO VARCHAR(50) NOT NULL COMMENT 'Primer Apellido del Paciente',
  PAC_SEGUNDO_APELLIDO VARCHAR(50) NULL COMMENT 'Segundo Apellido del Paciente',
  PAC_FECHA_NAC DATE NOT NULL COMMENT 'Fecha de Nacimiento del Paciente',
  PAC_DUI VARCHAR(10) NOT NULL UNIQUE COMMENT 'Documento Único de Identidad',
  PAC_TELEFONO VARCHAR(9) NULL DEFAULT('0000-0000') COMMENT 'Número de Teléfono del Paciente'
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS TBL_ESPECIALIDADES(
  ESP_ID INT PRIMARY KEY AUTO_INCREMENT,
  ESP_NOMBRE VARCHAR(50) NOT NULL COMMENT 'Nombre de la Especialidad'
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS TBL_DOCTORES(
  DOC_ID INT PRIMARY KEY AUTO_INCREMENT,
  DOC_NOMBRE VARCHAR(100) NOT NULL COMMENT 'Nombre del Doctor',
  DOC_ESPECIALIDAD INT NOT NULL COMMENT 'ID de la Especialidad (FK)',
  DOC_TELEFONO VARCHAR(15) NULL DEFAULT('0000-0000') COMMENT 'Número de Teléfono del Doctor',
  CONSTRAINT FK_DOCTOR_ESPECIALIDAD FOREIGN KEY(DOC_ESPECIALIDAD)
    REFERENCES TBL_ESPECIALIDADES(ESP_ID)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS TBL_CITAS(
  CIT_ID INT PRIMARY KEY AUTO_INCREMENT,
  CIT_FECHA DATE NOT NULL COMMENT 'Fecha de la Cita',
  CIT_HORA TIME NOT NULL COMMENT 'Hora de la Cita',
  CIT_PACIENTE INT NOT NULL COMMENT 'ID del Paciente (FK)',
  CIT_DOCTOR INT NOT NULL COMMENT 'ID del Doctor (FK)',
  CIT_ESTADO VARCHAR(20) DEFAULT('PROGRAMADA') COMMENT 'Estado de la Cita (PROGRAMADA | COMPLETADA | CANCELADA)',
  CONSTRAINT FK_CITA_PACIENTE FOREIGN KEY(CIT_PACIENTE)
    REFERENCES TBL_PACIENTES(PAC_ID),
  CONSTRAINT FK_CITA_DOCTOR FOREIGN KEY(CIT_DOCTOR)
    REFERENCES TBL_DOCTORES(DOC_ID)
)ENGINE=INNODB;


-- ************************ DATOS INICIALES (PRUEBAS) ************************

-- DATOS PARA TBL_PACIENTES
INSERT INTO TBL_PACIENTES (PAC_PRIMER_NOMBRE, PAC_SEGUNDO_NOMBRE, PAC_PRIMER_APELLIDO, PAC_SEGUNDO_APELLIDO, PAC_FECHA_NAC, PAC_DUI, PAC_TELEFONO)
VALUES
('Juan', 'Carlos', 'Gomez', 'Martinez', '1985-05-10', '12345678-9', '7852-9630'), -- Paciente 1
('Maria', 'Isabel', 'Lopez', 'Hernandez', '1990-03-22', '87654321-0', '7896-1234'), -- Paciente 2
('Pedro', 'Antonio', 'Cruz', 'Morales', '1978-11-05', '23456789-0', '7412-9630'), -- Paciente 3
('Ana', 'Gabriela', 'Martinez', 'Perez', '1982-02-14', '34567890-1', '7895-6321'), -- Paciente 4
('Luis', 'Fernando', 'Rodriguez', 'Gutierrez', '1995-07-19', '45678901-2', '7521-8463'), -- Paciente 5
('Sofia', 'Alejandra', 'Ramirez', 'Castro', '1988-09-30', '56789012-3', '7412-3698'), -- Paciente 6
('Carlos', 'Eduardo', 'Morales', 'Mejia', '1976-12-01', '67890123-4', '7895-2147'), -- Paciente 7
('Laura', 'Patricia', 'Hernandez', 'Ruiz', '1980-08-08', '78901234-5', '7521-4785'), -- Paciente 8
('Miguel', 'Angel', 'Vargas', 'Ortega', '1983-04-25', '89012345-6', '7415-2369'), -- Paciente 9
('Elena', 'Susana', 'Castillo', 'Diaz', '1992-11-29', '90123456-7', '7892-1574'); -- Paciente 10

-- DATOS PARA TBL_ESPECIALIDADES
INSERT INTO TBL_ESPECIALIDADES (ESP_NOMBRE)
VALUES
('Cardiología'), -- Especialidad 1
('Dermatología'), -- Especialidad 2
('Neurología'), -- Especialidad 3
('Pediatría'), -- Especialidad 4
('Psiquiatría'), -- Especialidad 5
('Oncología'), -- Especialidad 6
('Ginecología'), -- Especialidad 7
('Urología'), -- Especialidad 8
('Oftalmología'), -- Especialidad 9
('Traumatología'); -- Especialidad 10

-- DATOS PARA TBL_DOCTORES
INSERT INTO TBL_DOCTORES (DOC_NOMBRE, DOC_ESPECIALIDAD, DOC_TELEFONO)
VALUES
('Dr. Alberto Sanchez', 1, '7895-6321'), -- Doctor 1
('Dra. Beatriz Jimenez', 2, '7412-9630'), -- Doctor 2
('Dr. Carlos Fernandez', 3, '7892-1574'), -- Doctor 3
('Dra. Daniela Ortega', 4, '7521-9630'), -- Doctor 4
('Dr. Enrique Diaz', 5, '7896-3214'), -- Doctor 5
('Dra. Fernanda Lopez', 6, '7412-4785'), -- Doctor 6
('Dr. Gabriel Perez', 7, '7521-8452'), -- Doctor 7
('Dra. Helena Ruiz', 8, '7895-2147'), -- Doctor 8
('Dr. Ignacio Vargas', 9, '7415-2369'), -- Doctor 9
('Dra. Julia Martinez', 10, '7896-1234'); -- Doctor 10

-- DATOS PARA TBL_CITAS
INSERT INTO TBL_CITAS (CIT_FECHA, CIT_HORA, CIT_PACIENTE, CIT_DOCTOR, CIT_ESTADO)
VALUES
('2024-11-04', '10:00:00', 1, 1, 'PROGRAMADA'), -- Cita 1
('2024-11-04', '11:00:00', 2, 2, 'PROGRAMADA'), -- Cita 2
('2024-11-04', '12:00:00', 3, 3, 'COMPLETADA'), -- Cita 3
('2024-11-04', '13:00:00', 4, 4, 'CANCELADA'), -- Cita 4
('2024-11-05', '14:00:00', 5, 5, 'PROGRAMADA'), -- Cita 5
('2024-11-05', '15:00:00', 6, 6, 'COMPLETADA'), -- Cita 6
('2024-11-05', '16:00:00', 7, 7, 'PROGRAMADA'), -- Cita 7
('2024-11-06', '09:00:00', 8, 8, 'COMPLETADA'), -- Cita 8
('2024-11-06', '10:00:00', 9, 9, 'PROGRAMADA'), -- Cita 9
('2024-11-06', '11:00:00', 10, 10, 'CANCELADA'); -- Cita 10

-- ************************ QUERYS DEL NEGOCIO ************************

SELECT * FROM TBL_PACIENTES;

SELECT * FROM TBL_ESPECIALIDADES;

SELECT * FROM TBL_DOCTORES;

SELECT * FROM TBL_CITAS;

-- BUSCAR SI YA EXISTE PACIENTE CON EL MISMO DUI
SELECT PAC_DUI FROM TBL_PACIENTES WHERE PAC_DUI = '45678901-2';

-- RECUPERAR TODAS LAS CITAS PROGRAMADAS DESDE LA FECHA MAS ANTIGUA
SELECT * FROM TBL_CITAS WHERE CIT_ESTADO = 'PROGRAMADA' ORDER BY CIT_FECHA ASC;










