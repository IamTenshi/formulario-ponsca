show databases;
use ponsca;
show tables;
select * from students;

CREATE TABLE IF NOT EXISTS `ponsca`.`students` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `nombre_y_apellido` VARCHAR(32) NOT NULL,
  `fecha` DATE NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `direccion` VARCHAR(255) NOT NULL,
  `telefono` VARCHAR(12) NOT NULL,
  `celular` VARCHAR(12) NOT NULL,
  `hermanos` INT NOT NULL,
  `seguro` VARCHAR(2) NOT NULL,
  `sangre_tipo` VARCHAR(3) NOT NULL,
  `alergia_enfermedad` VARCHAR(45) NOT NULL,
  `contacto_emergencia` VARCHAR(64) NOT NULL,
  `nombre_padre` VARCHAR(16) NOT NULL,
  `apellido_padre` VARCHAR(32) NOT NULL,
  `pmt` VARCHAR(5) NOT NULL,
  `telefono_padre` VARCHAR(12) NOT NULL,
  `celular_padre` VARCHAR(12) NOT NULL,
  `trabajo` VARCHAR(12),
  `puesto_de_trabajo` VARCHAR(12),
  `celular_trabajo_padre` VARCHAR(12),
  PRIMARY KEY (`ID`))