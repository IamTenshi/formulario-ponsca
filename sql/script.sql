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
  PRIMARY KEY (`ID`))